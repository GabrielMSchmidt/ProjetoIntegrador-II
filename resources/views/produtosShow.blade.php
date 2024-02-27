@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', 'Produto')

@section('content')
            <div class="content3">
                <br>
                <h3>Dados do Produto {{$produto->name}}</h3>
                <div class="dados">
                    <hr>
                    <ul>
                        <li>Nome: {{ $produto->name }}</li>
                        <li>Código: {{ $produto->codigo }}</li>
                        <li>Categoria: {{$produto->categoria}}</li>
                        <li>Data de Criação: {{ $produto->data }}</li>
                        <li>Quantidade: {{ $produto->quantidade }}</li>
                        <li>Preço Unitário: {{ $produto->precoUnitario }}</li>
                        <li>Fornecedor: {{ $fornecedor->name }}</li>
                    </ul>
                </div>
                    <form action="{{ route('produto.destroy', $produto->id) }}" method="POST" class="formulario">
                      @method('DELETE')
                      @csrf
                      <div class="botoesD">
                        <button type="button" class="botao" onclick="history.back()"> Cancelar </button>
                        <button type="submit" class="botao"> Deletar </button>
                      </div>
                    </form>
            </div>

</body>
</html>
