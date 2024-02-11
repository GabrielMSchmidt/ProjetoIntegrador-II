<?php

namespace App\Http\Controllers;


use App\Models\Fornecedor;
use Illuminate\Http\Request;

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

        return redirect()->route('fornecedor.show');
    }

    public function teste(){

        $fornecedores = Fornecedor::get();

        return view ('fornecedoresTeste', compact('fornecedores'));
    }

    public function update(){

    }

    public function delete(){

    }
}

?>
