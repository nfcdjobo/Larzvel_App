<?php

namespace App\Http\Controllers;

use App\Models\User; // Importation du modèle User


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{

    public function __construct(){
        $this->middleware('guest');
    }



    public function create(Request $request){
        $validated =  $request->validate([
            'fullname' => ['required', 'string','between: 3,100'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed']
        ]);

        if($validated){
            // dd($request->remember);
            if($request->file('photo')){
                // Obtenez le protocole utilisé par la requête (http ou https)
                $protocol = $request->getScheme();
                // Obtenez le nom de domaine de la requête
                $host = $request->getHost();
                $fileName = time().'.'.$request->file('photo')->extension();
                // Déplacez le fichier vers le répertoire public/images
                $filePath = $request->file('photo')->storeAs('images', $fileName, 'public');
                $url = $protocol.'://'.$host.'/public/'.$filePath;
                // dd($url);
                $request->photo = $url;
            }

            $request->password = Hash::make($request->password);
            $newUser = User::create($request->all());

            if($request->remember !== null){
                Auth::login($newUser);
                return redirect()->route('home')->with('success', 'Compte créé avec succès !');
            }else{
                return redirect()->route('login')->with('success', 'Compte créé avec succès !');
            }
        }else{
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

    }



}
