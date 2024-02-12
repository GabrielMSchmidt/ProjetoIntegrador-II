@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', "Editar Fornecedor $fornecedor->name")

@section('content')
            <div class="content3">
              <form action="{{ route('fornecedor.update', $fornecedor->id) }}" method="post">
                @method('PUT')
                @csrf
                <br>
                <h3>Editar Fornecedor {{ $fornecedor->name }}</h3>
                <table class="table">
                <fieldset>
                  <div class="campo">
                    <label for="nomeFornecedor">Nome</label>
                    <input type="text" placeholder="Nome" name="name" value="{{$fornecedor->name}}" required>

                    <label for="codFornecedor">Código</label>
                    <input type="number" placeholder="Código" name="codigo" value="{{$fornecedor->codigo}}" required>
                  </div>

                  <div class="campo">
                    <label for="cnpjFornecedor">CNPJ</label>
                    <input type="text" placeholder="CNPJ" name="cnpj" value="{{$fornecedor->cnpj}}" required>

                    <label for="dataFornecedor">Data</label>
                    <input type="date" name="data" value="{{$fornecedor->data}}" required>
                  </div>
                  
                  <div class="campo">
                    <button type="button" class="botao" onclick="history.back()">Cancelar</button>
                    <button type="submit" class="botao">Salvar</button>
                  </div>
                </fieldset>
                </table>
              </form>
            </div>

</body>
</html>