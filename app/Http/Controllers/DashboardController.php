<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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

    public function profile(){
        return view('profile');
    }

    public function deconnexion(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('index');
    }
}
