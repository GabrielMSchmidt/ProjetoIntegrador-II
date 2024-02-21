<?php

namespace App\Http\Controllers;


use App\Models\Produto;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return view ('produtosOverview');
    }

    public function create(){

        $fornecedores = Fornecedor::get();
        return view ('produtosCreate', compact('fornecedores'));
    }

    public function store(Request $request){

        Produto::create($request->all());

        return redirect()->route('produto.index');
    }

    public function update(){

    }

    public function delete(){

    }
}

?>
