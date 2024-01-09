<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        
        User::create($request->all());

        return redirect()->route('dashboard');
    }

    public function login(){
        return view ('login');
    }

    public function dashboard(){
        return view ('dashboard');
    }

    public function produtosOverview(){
        return view ('produtosOverview');
    }

    public function fornecedoresOverview(){
        return view ('fornecedoresOverview');
    }

    public function novoProdutoOverview(){
        return view ('novoProdutoOverview');
    }
}

?>