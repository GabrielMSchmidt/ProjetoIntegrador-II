<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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
}
