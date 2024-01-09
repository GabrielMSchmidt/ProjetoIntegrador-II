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
                <h3>Cadastrar Novo Fornecedor</h3>
                <table class="table">
                <fieldset>
                  <div class="campo">
                    <label for="nomeFornecedor">Nome</label>
                    <input type="text" placeholder="Nome" name="name" required>

                    <label for="codFornecedor">Código</label>
                    <input type="number" placeholder="Código" name="codigo" required>
                  </div>

                  <div class="campo">
                    <label for="cnpjFornecedor">CNPJ</label>
                    <input type="text" placeholder="CNPJ" name="cnpj" required>

                    <label for="dataFornecedor">Data</label>
                    <input type="date" name="data" required>
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