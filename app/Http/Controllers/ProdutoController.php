<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show(){
        return view ('produtosOverview');
    }

    public function create(){
        return view ('produtosCreate');
    }

    public function store(Request $request){

        Produto::create($request->all());

        return redirect()->route('produto.show');
    }

    public function update(){

    }

    public function delete(){

    }
}
