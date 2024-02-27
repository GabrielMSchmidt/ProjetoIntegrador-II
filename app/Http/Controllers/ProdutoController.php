<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreUpdateProdutoFormRequest;
use App\Models\Produto;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::get();

        return view ('produtosOverview', compact('produtos'));
    }

    public function create(){

        $fornecedores = Fornecedor::get();
        return view ('produtosCreate', compact('fornecedores'));
    }

    public function store(StoreUpdateProdutoFormRequest $request){

        $data = $request->all();
        $fornecedor = Fornecedor::where('name', $request->fornecedor)->first();
        $data['fornecedor'] = $fornecedor->id;

        Produto::create($data);

        return redirect()->route('produto.index');
    }

    public function show($id){

        if (!$produto = Produto::find($id))
            return redirect()-> route('produto.index');

        $fornecedor = Fornecedor::find($produto->fornecedor);

        return view ('produtosShow', compact('produto'), compact('fornecedor'));
    }

    public function edit($id){

        if (!$produto = Produto::find($id))
            return redirect()-> route('produto.index');

        $fornecedor = Fornecedor::get();

        return view('produtosEdit', compact('produto'), compact('fornecedor'));
    }

    public function update(Request $request, $id){

        if (!$produto = Produto::find($id))
            return redirect()-> route('Produto.index');

        $data = $request->all();
        $fornecedor = Fornecedor::where('name', $request->fornecedor)->first();
        $data['fornecedor'] = $fornecedor->id;

        $produto->update($data);

        return redirect()->route('produto.index');
    }

    public function destroy($id){

        if (!$produto = Produto::find($id))
            return redirect()-> route('produto.index');

        $produto->delete();
        return redirect()->route('produto.index');
    }
}

?>
