<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        
        User::create($request->all());

        return redirect()->route('login');
    }

    public function login(){
        return view ('login');
    }

    public function store(Request $request){
        
        $user = User::where('idUsuario', $request->input('idUsuario'))->first();

        if (!$user){
            return redirect()->route('login')->withErrors(['error' => 'id não registrado']);
        }

        if (!password_verify($request->input('password'), $user->password)){
            return redirect()->route('login')->withErrors(['error' => 'senha incorreta']);
        }
        return redirect()->route('dashboard');

    }    
    
    public function register (){
        return view ('register');
    }
    
    public function dashboard(){
        return view ('dashboard');
    }

}

?>