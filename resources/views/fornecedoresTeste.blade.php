@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', 'Fornecedores')

@section('content')
            <div class="content3">
              <form action="{{ route('fornecedor.store') }}" method="post">
                @csrf
                <br>
                <h3>Listagem dos Fornecedores</h3>
                <table class="table">
                  <hr>
                  <div class= "listagem">
                    <p>Nome</p>
                    <p>Código</p>
                    <p>CNPJ</p>
                    <p>Data</p>
                    <hr>
                     {{-- <br>
                      <p>{{ $fornecedor->name }}</p>
                      <p>{{ $fornecedor->codigo }}</p>
                      <p>{{ $fornecedor->cnpj }}</p>
                      <p>{{ $fornecedor->data }}</p> --}}
                  </div> 
                  <hr>
                    @foreach ($fornecedores as $fornecedor)
                      <li>
                        {{ $fornecedor->name }} |
                        {{-- {{ $fornecedor->codigo }} -
                        {{ $fornecedor->cnpj }} -
                        {{ $fornecedor->data }} - --}}
                        <a href="{{ route('fornecedor.show', $fornecedor->id) }}">Detalhes</a>
                      </li>
                    @endforeach
                </table>
              </form>
            </div>

</body>
</html>
{{-- <div class="listagem">
    <p>Código</p>
    <p>NomeFornecedor</p>
    <p>Telefone</p>
    <p>Endereco</p>
    <p>UltimaCompra</p>
</div>
<hr> --}}