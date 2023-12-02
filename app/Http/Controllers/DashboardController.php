<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Importation du modèle User
use App\Models\Car; // Importation du modèle Car
use App\Models\Member; // Importation du modèle Member

use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        return view('dashboard', ['user' => $user]);
    }

    public function profile(){
        return view('profile', ['user' => Auth::user()]);
    }

    public function update(Request $request){
        $user = Auth::user();
        $validated =  $request->validate([
            'fullname' => ['required', 'string','between: 3,100'],
            'phone' => ['required', 'string'],
        ]);

        if($request->password){
            $request->validate([
                'password' => ['required', 'string', 'min:4', 'confirmed']
            ]);
            $validated['password'] = Hash::make($request->password);
        }

        // dd($validated);
        $isUpdated = $user->update($validated);

        if($isUpdated) Auth::login($user);

        return view('profile', ['user' => Auth::user()]);
    }

    public function deconnexion(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('index');
    }
}
