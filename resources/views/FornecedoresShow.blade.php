@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', 'Fornecedor')

@section('content')
            <div class="content3">
              <form action="{{ route('fornecedor.store') }}" method="post">
                @csrf
                <br>
                <h3>Dados do Fornecedor {{$fornecedor->name}}</h3>
                <table class="table">
                    <hr>
                    <ul>
                        <li>Nome: {{ $fornecedor->name }}</li>
                        <li>Código: {{ $fornecedor->codigo }}</li>
                        <li>CNPJ: {{ $fornecedor->cnpj }}</li>
                        <li>Data de Criação: {{ $fornecedor->data }}</li>
                    </ul>
                </table>
              </form>
            </div>

</body>
</html>