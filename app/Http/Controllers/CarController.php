<?php

namespace App\Http\Controllers;
use App\Models\User; // Importation du modèle User
use App\Models\Car; // Importation du modèle Car
use App\Models\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $loggerUser = auth::user();
        $members = $loggerUser->memnbers;
        $cars = $loggerUser->cars()->latest()->paginate(6);
        return view('car', ['cars' => $cars]);
    }

    public function create(Request $request){




        $validated =  $request->validate([
            'marque' => ['required', 'string','between: 3, 50'],
            'matricule' => ['required', 'string','between: 3, 50'],
            'couleur' => ['required', 'string'],
            'image.*' => ['required', 'file', 'mimes:jpeg,png,svg,jpg', 'max:50000'],
        ]);

        $genererChaineAleatoire = function($longueur) {
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyz';
            $chaineAleatoire = '';
            for ($i = 0; $i < $longueur; $i++) {
                $indexAleatoire = rand(0, strlen($caracteres) - 1);
                $chaineAleatoire .= $caracteres[$indexAleatoire];
            }
            return $chaineAleatoire;
        };



        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $filename = preg_replace('/\s+/', '', time() .$genererChaineAleatoire(30). '.' . $image->extension());

                $image->move('images', $filename, 'public');

                // Enregistrez le chemin de l'image dans la base de données
                $images[] = $filename;
            }
            // dd($images);

        }

        // $request->image = json_encode($images);
        $validated['image'] = json_encode($images);
        // $validated[] = []

        $user = Auth::user();

        $newCar = new Car($validated);
        $newCar->user()->associate($user);
        $saveCar = $newCar->save();

        return redirect()->route('CardController.index')->withErrors($validated)->withInput();
        
    }

    public function findAll(){
        // return view('')
    }

    public function findById(Car $id){
        return view('findCar', ['car' => $id]);
    }

    // public function findById(Car $id){
    //     $car = Car::find($id);
    //     return view('findCar', ['car' => $car]);
    // }

    public function findByMatricule(){
        
    }

    public function update(){
        
    }

    public function delete(){
        
    }
}
