<?php

namespace App\Http\Controllers;

use App\Models\User; // Importation du modèle User
use App\Models\Car; // Importation du modèle Car
use App\Models\Member; // Importation du modèle Member

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        // On récupère l'utilisateur actuellement connecté sur la facade Auth
        $loggerUser = auth()->user();
        // On récupère les véhicule qui lui sont propre (associés à user)
        $cars = $loggerUser->cars;
        dd($cars);


        return view('index');
    }

}
