@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', 'Fornecedor')

@section('content')
            <div class="content3">
              <form action="{{ route('fornecedor.store') }}" method="post" class="form_content3">
                @csrf
                <br>
                <h3>Cadastrar Novo Fornecedor</h3>
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
                    <label for="telefoneFornecedor">Telefone</label>
                    <input type="text" placeholder="Telefone" name="telefone" required>
                  </div>

                  <div class="botoesF">
                    <button type="button" class="botao" onclick="history.back()">Cancelar</button>
                    <button type="submit" class="botao">Salvar</button>
                  </div>
                </fieldset>
              </form>
            </div>

</body>
</html>
