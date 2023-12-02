<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function login(){
        return view('login');
    }

    public function authent(Request $request){
        // On définit nos règles de validation des champs du formulaire
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);
 
        /* Si les champs du formulaires respectent les règles de validation,
        alors grâce à la facade Auth et sa méthode attempt on tente de se connecter 
        l'utilisateur avec les informations du formulaire passé en argument de la méthode attempt de la facade euth*/
        if (Auth::attempt($validated, (bool) $request->remember)) {
            // Lorsque la connexion est effectuée, on génère un identifiant de session
            $request->session()->regenerate();
 
            // Pour on se rédirige vers la route qu'il faut
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Ici au cas où la connexion échoue, grace à la méthode back() on fait une rédirection sur la page précédente.
        // Et on cré une variable de session fatch érronnée
        return back()->withErrors([
            'email' => 'Les informations fournits ne sont pas corrects.',
        ])->onlyInput('email');
    }
}
