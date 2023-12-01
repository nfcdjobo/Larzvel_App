<?php

namespace App\Http\Controllers;
use App\Models\User; // Importation du modèle User
use App\Models\Car; // Importation du modèle Car

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        // $cars = Car::latest()->get();
        $cars = Car::with('member')->latest()->paginate(6);
        return view('car', ['cars' => $cars]);
    }

    public function create(){
        
    }

    public function findAll(){
        // return view('')
    }

    public function findById(Car $id){
        $car = Car::with('member')->find($id);
        return view('findCar', ['car' => $car]);
    }

    public function findByMatricule(){
        
    }

    public function update(){
        
    }

    public function delete(){
        
    }
}
