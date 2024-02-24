@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', 'Produtos')

@section('content')
            <div class="content3">
              <form action="{{ route('produto.store') }}" method="post" class="form_content3">
                @csrf
                <br>
                <h3>Cadastrar Novo Produto</h3>
                <fieldset>
                  <div class="campo">
                    <label for="nomeProduto">Nome</label>
                    <input type="text" placeholder="Nome" name="name" id="nomeProd" required>

                    <label for="codProduto">Código</label>
                    <input type="number" placeholder="Código" name="codigo" id="codigoProd" required>
                  </div>

                  <div class="campo">
                    <label for="categoriaProduto">Categoria</label>
                    <input type="text" placeholder="Categoria" name="categoria" id="categoriaProd" required>

                    <label for="dataProduto">Data</label>
                    <input type="date" name="data" id="dataProd" required>
                  </div>

                  <div class="campo">
                    <label for="qtdeProduto">Quantidade</label>
                    <input type="integer" placeholder="Quantidade" name="quantidade" id="qtdeProd" required>

                    <label for="preçoProduto">Preço Unitário</label>
                    <input type="float" placeholder="Preço Unitário" name="precoUnitario" id="precoProd" required>
                  </div>

                  <div class="campo">
                    <label for="fornecedorProd">Fornecedor</label>
                    <select name="fornecedor" required>
                      @foreach ($fornecedores as $fornecedor)
                          <option>{{ $fornecedor->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="botoesF">
                    <button type="button" class="botao" onclick="history.back()">Cancelar</button>
                    <button type="submit" class="botao">Salvar</button>
                  </div>
              </fieldset>
              @if ($errors->any())
                  <ul class="errors">
                    @foreach ($errors->all() as $error)
                      <li class="error">{{ $error }}</li>
                    @endforeach
                  </ul>
                @endif
              </form>
            </div>

</body>
</html>
