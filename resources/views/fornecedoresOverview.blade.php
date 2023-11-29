@extends ('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styleprodutosOverview.css') }}">
@endsection

@section('title', 'Fornecedores')

@section('content')
    <div class="title">
        <br>
        <h3>Fornecedores</h3>
    </div>
    <br>
    <div class="content2">
        <div class="top-content">
            {{-- <button>Novo Produto </button> --}}
            <button>Novo Fornecedor</button>
            {{-- <a href="Novo Fornecedor">Novo Fornecedor</a> --}}
            <h3>NomeDaEmpresa</h3>
            <button class="botaoVoltar"><a href="{{ route('dashboard') }}">Voltar</a></button>
        </div>
        {{-- <p>Código Categoria NomeProduto QtdeProduto CustoProduto UltimaCompra</p> --}}
        <hr>
        <div class="listagem">
            <p>Código</p>
            <p>NomeFornecedor</p>
            <p>Telefone</p>
            <p>Endereco</p>
            <p>UltimaCompra</p>
        </div>
        <hr>
    </div>
@endsection
