<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show(){
        return view ('produtosOverview');
    }

    public function showNP(){
        return view ('novoProduto');
    }

    public function store(){

    }

    public function update(){

    }

    public function delete(){

    }
}
