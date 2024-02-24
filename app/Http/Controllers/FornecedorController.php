<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFornecedorFormRequest;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = Fornecedor::get();

        return view ('fornecedoresOverview', compact('fornecedores'));
    }

    public function create(){
        return view ('fornecedoresCreate');
    }

    public function store(StoreUpdateFornecedorFormRequest $request){

        Fornecedor::create($request->all());

        return redirect()->route('fornecedor.index');
    }

    public function show($id){

        if (!$fornecedor = Fornecedor::find($id))
            return redirect()-> route('fornecedor.index');

        return view ('fornecedoresShow', compact('fornecedor'));
    }

    
    public function edit($id){

        if (!$fornecedor = Fornecedor::find($id))
            return redirect()-> route('fornecedor.index');
    
        return view('fornecedoresEdit', compact('fornecedor'));
    }

    public function update(Request $request, $id){
        
        if (!$fornecedor = Fornecedor::find($id))
            return redirect()-> route('fornecedor.index');

        $fornecedor->update($request->all());

        return redirect()->route('fornecedor.index');
    }

    public function destroy($id){
        
        if (!$fornecedor = Fornecedor::find($id))
            return redirect()-> route('fornecedor.index');

        $fornecedor->delete();

        return redirect()->route('fornecedor.index');
    }
}

// public function teste(){

//     $fornecedores = Fornecedor::get();

//     return view ('fornecedoresTeste', compact('fornecedores'));
// }
?>
