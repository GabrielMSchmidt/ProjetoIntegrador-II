@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styleprodutosOverview.css') }}">
@endsection

@section('title', 'Produtos')

@section('content')
    <div class="title">
        <br>
        <h2>Produtos</h2>
    </div>
    <br>
    <div class="content2">
        <div class="top-content">
            <button class="botaoNovoProduto"><a href="{{ route('produto.showNP') }}">Novo Produto</a></button>
            {{-- <button type="submit" formaction="{{ route('dashboard')}}">Novo Produto</button> --}}
            {{-- <button>Novo Fornecedor </button> --}}
            {{-- <a href="Novo Fornecedor">Novo Fornecedor</a> --}}
            <h4>NomeDaEmpresa</h4>
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
