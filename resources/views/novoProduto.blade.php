@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', 'Produtos')

@section('content')
            <div class="content3">
              <form action="">
                @csrf
                <br>
                <h3>Cadastrar Novo Produto</h3>
                <fieldset>
                  <div class="campo">
                    <label for="nomeProduto">Nome</label>
                    <input type="text" placeholder="Nome" name="nomeProduto" id="nomeProd" required>

                    <label for="codProduto">Código</label>
                    <input type="number" placeholder="Código" name="codProduto" id="codigoProd" required>
                  </div>

                  <div class="campo">
                    <label for="categoriaProduto">Categoria</label>
                    <input type="text" placeholder="Categoria" name="categoriaProduto" id="categoriaProd" required>

                    <label for="dataProduto">Data</label>
                    <input type="date" name="dataProduto" id="dataProd" required>
                  </div>

                  <div class="campo">
                    <label for="qtdeProduto">Quantidade</label>
                    <input type="number" placeholder="Quantidade" name="qtdeProduto" id="qtdeProd" required>

                    <label for="preçoProduto">Preço Unitário</label>
                    <input type="number" placeholder="Preço Unitário" name="precoProduto" id="precoProd" required>
                  </div>

                  <div class="campo">
                    <label for="fornecedorProd">Fornecedor</label>
                    <select id="fornecedorProd" required>
                      <option>Fornecedor 1</option>
                      <option>Fornecedor 2</option>
                      <option>Fornecedor 3</option>
                    </select>
                  </div>

                  <div class="campo">
                    <label for="cnpjProd">CNPJ</label>
                    <input type="text" placeholder="CNPJ" name="cnpjProd" id="cnpjProd" required>
                  </div>

                  <div class="campo">
                    <button type="menu" class="botao" action="{{ route('dashboard') }}">Cancelar</button>
                    <button type="submit" class="botao">Salvar</button>
                  </div>
              </fieldset>
              </form>
            </div>

</body>
</html>
