@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/styleprodutosOverview.css') }}">
@endsection

@section('title', 'Produtos')

@section('content')
    <div class="title">
        <br>
        <h3>Produtos</h3>
    </div>
    <br>
    <div class="content2">
        <div class="top-content">
            <button class="botaoNovoProduto"><a href="{{ route('produto.create') }}">Novo Produto</a></button>
            <h3>NomeDaEmpresa</h3>
            <button class="botaoVoltar"><a href="{{ route('dashboard') }}">Voltar</a></button>
        </div>
        <hr>
        <table class="tabela">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Quantidade</th>
              </tr>

            </thead>
            <tbody>
              @foreach ($produtos as $produto)
                <tr>
                  <td>{{$produto->codigo}}</td>
                  <td>{{$produto->name}}</td>
                  <td>{{$produto->categoria}}</td>
                  <td>{{$produto->quantidade}}</td>
                  <td><a href="{{route('produto.show', $produto->id) }}" class="link">Detalhes</a></td>
                  <td><a href="{{route('produto.edit', $produto->id) }}" class="link">Editar</a></td>
                </tr>
               @endforeach
            </tbody>
          </table>
         <hr>
    </div>
@endsection
