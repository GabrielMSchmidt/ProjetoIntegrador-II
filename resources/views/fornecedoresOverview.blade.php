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
            <button class="botaoNovoProduto"><a href="{{ route('fornecedor.create') }}">Novo Fornecedor</a></button>
            <h3>NomeDaEmpresa</h3>
            <button class="botaoVoltar"><a href="{{ route('dashboard') }}">Voltar</a></button>
        </div>
        <hr>
        <table class="tabela">
            <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Telefone</th>
              </tr>

            </thead>
            <tbody>
              @foreach ($fornecedores as $fornecedor)
                <tr>
                  <td>{{$fornecedor->codigo}}</td>
                  <td>{{$fornecedor->name}}</td>
                  <td>{{$fornecedor->cnpj}}</td>
                  <td>{{$fornecedor->telefone}}</td>
                  <td><a href="{{route('fornecedor.show', $fornecedor->id) }}" class="link">Detalhes</a></td>
                  <td><a href="{{route('fornecedor.edit', $fornecedor->id) }}" class="link">Editar</a></td>
                </tr>
               @endforeach
            </tbody>
          </table>
         <hr>
    </div>
@endsection
