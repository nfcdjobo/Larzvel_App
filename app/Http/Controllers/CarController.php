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
            $validated['image'] = json_encode($images);
        }

        $user = Auth::user();
        $newCar = new Car($validated);
        $newCar->user()->associate($user);
        $saveCar = $newCar->save();

        return redirect()->route('CarController.index')->withErrors($validated)->withInput();

    }


    public function findById(Car $id){
        $user = auth::user();
        $members = $user->members()->get();
        // dd($members);
        return view('findCar', ['car' => $id, 'member' => $members]);
    }


    public function findByMatricule(){

    }

    public function update(Request $request, Car $id){

        $genererChaineAleatoire = function($longueur) {
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyz';
            $chaineAleatoire = '';
            for ($i = 0; $i < $longueur; $i++) {
                $indexAleatoire = rand(0, strlen($caracteres) - 1);
                $chaineAleatoire .= $caracteres[$indexAleatoire];
            }
            return $chaineAleatoire;
        };

        $validated =  $request->validate([
            'marque' => ['required', 'string','between: 3, 50'],
            'matricule' => ['required', 'string','between: 3, 50'],
            'couleur' => ['required', 'string']
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $filename = preg_replace('/\s+/', '', time() .$genererChaineAleatoire(30). '.' . $image->extension());
                $image->move('images', $filename, 'public');
                // Enregistrez le chemin de l'image dans la base de données
                $images[] = $filename;
            }
            $validated['image'] = json_encode($images);
        }

        if($request->member_id) $validated['member_id'] = $request->member_id;

        if($validated && $id){
            $id->update($validated);
            return redirect()->route('CarController.gitById', $id)->with('success', 'Mise à jour effectuée avec succès !');
        }else{
            return redirect()->route('CarController.gitById', $id)->withErreur($validated)->withInput();
        }



    }

    public function delete(Car $id){
        if($id){
            $id->delete();
            return redirect()->route('CarController.index')->with('delete', 'Supression effectué avec succès');
        }
    }
}
