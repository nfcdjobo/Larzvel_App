<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }

    public function register(){
        return view('login');
    }
}
