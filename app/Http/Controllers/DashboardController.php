<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Importation du modèle User
use App\Models\Car; // Importation du modèle Car
use App\Models\Member; // Importation du modèle Member

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard');
    }
}
