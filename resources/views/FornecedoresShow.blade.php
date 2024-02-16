@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', 'Fornecedor')

@section('content')
            <div class="content3">
                <br>
                <h3>Dados do Fornecedor {{$fornecedor->name}}</h3>
                    <hr>
                    <ul>
                        <li>Nome: {{ $fornecedor->name }}</li>
                        <li>Código: {{ $fornecedor->codigo }}</li>
                        <li>CNPJ: {{ $fornecedor->cnpj }}</li>
                        <li>Data de Criação: {{ $fornecedor->data }}</li>
                    </ul>
                    <form action="{{ route('fornecedor.destroy', $fornecedor->id) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="button" class="botao" onclick="history.back()">Cancelar</button>
                      <button type="submit" class="botao">Deletar</button>
                    </form>
            </div>

</body>
</html>