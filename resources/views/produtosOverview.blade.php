@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styleprodutosOverview.css') }}">
@endsection

@section('title', 'Produtos')

@section('content')
    <div class="title">
        <br>
        <h1>Produtos</h1>
    </div>
    <br>
    <div class="content2">
        <div class="top-content">
            <button class="botaoNovoProduto"><a href="{{ route('novoProdutoOverview') }}">Novo Produto</a></button>
            {{-- <button type="submit" formaction="{{ route('dashboard')}}">Novo Produto</button> --}}
            {{-- <button>Novo Fornecedor </button> --}}
            {{-- <a href="Novo Fornecedor">Novo Fornecedor</a> --}}
            <h3>NomeDaEmpresa</h3>
            <button class="botaoVoltar"><a href="{{ route('dashboard') }}">Voltar</a></button>
        </div>
        <hr>
        <div class="listagem">
          <p>Código</p>
          <p>Categoria</p>
          <p>Fornecedor</p>
          <p>NomeProduto</p>
          <p>QtdeProduto</p>
          <p>CustoProduto</p>
          <p>UltimaCompra</p>
        </div>
        <hr>
    </div>
@endsection
