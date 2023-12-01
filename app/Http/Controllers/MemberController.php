<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Importation du modèle User
use App\Models\Member;

class MemberController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    

    public function index(){
        
        $members = Member::where('user_id', Auth::id())->paginate(6);
        return view('member', ['members' => $members]);
    }

    public function create(Request $request){
        
        $validated =  $request->validate([
            'fullname' => ['required', 'string','between: 3, 100'],
            'email' => ['required', 'email', 'unique:members'],
            'phone' => ['required', 'string'],
            'description' => ['required', 'string']
        ]);


        
        if($validated){
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

            $user = Auth::user();

            $newUser = new Member($validated);
            $newUser->user()->associate($user);
            $newMember = $newUser->save();
        }
        return redirect()->route('MemberController.index')->withErrors($validated)->withInput();

    }

    public function find(){
        
    }

    public function findById(Member $id){

        return view('findMember', ['member' => $id]);
    }

    public function update(Request $request, Member $id){
        
        $validated =  $request->validate([
            'fullname' => ['required', 'string','between: 3, 100'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'description' => ['required', 'string']
        ]);

        if($validated && $id){
            $id->update($validated);
            return redirect()->route('MemberController.gitById', $id)->with('success', 'Mise à jour effectuée avec succès !');
        }else{
            return redirect()->route('MemberController.gitById', $id)->withErreur($validated)->withInput();
        }

        

        
        


        

        if (!$member) redirect()->route('MemberController.update')->with('error', 'Mise à jour nous effectuée')->withInput();
        
        $member->update($validated);
        return redirect()->route('MemberController.update')->withErrors($validated)->withInput();
        
    }

    public function delete(Member $id){
        if($id){
            $id->delete();
            return redirect()->route('MemberController.index')->with('delete', 'Supression effectué avec succès');
        }
        
    }
}
