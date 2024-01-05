<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function show(){
        return view ('fornecedoresOverview');
    }

    public function create(){
        return view ('fornecedoresCreate');
    }

    public function store(Request $request){
        
        Fornecedor::create($request->all());

        return redirect()->route('fornecedores.show');
    }

    public function update(){

    }

    public function delete(){

    }
}
