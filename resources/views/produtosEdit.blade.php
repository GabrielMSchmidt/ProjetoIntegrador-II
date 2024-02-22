@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylenovoProduto.css') }}">
@endsection

@section('title', "Editar Produto $produto->name")

@section('content')
            <div class="content3">
              <form action="{{ route('produto.update', $produto->id) }}" method="post" class="form_content3">
                @method('PUT')
                @csrf
                <br>
                <h3>Editar produto {{ $produto->name }}</h3>
                <fieldset>
                  <div class="campo">
                    <label for="nomeProduto">Nome</label>
                    <input type="text" placeholder="Nome" name="name" value="{{$produto->name}}" required>

                    <label for="codProduto">Código</label>
                    <input type="number" placeholder="Código" name="codigo" value="{{$produto->codigo}}" required>
                  </div>

                  <div class="campo">
                    <label for="categoriaProduto">Categoria</label>
                    <input type="text" placeholder="Categoria" name="categoria" value="{{$produto->categoria}}" required>

                    <label for="dataProduto">Data</label>
                    <input type="date" name="data" value="{{$produto->data}}" required>
                  </div>

                  <div class="campo">
                    <label for="qtdeProduto">Quantidade</label>
                    <input type="integer" placeholder="Quantidade" name="quantidade" value="{{$produto->quantidade}}" required>

                    <label for="preçoProduto">Preço Unitário</label>
                    <input type="float" placeholder="Preço Unitário" name="precoUnitario" value="{{$produto->precoUnitario}}" required>
                  </div>

                  <div class="campo">
                    <label for="fornecedorProd">Fornecedor</label>
                    <select name="fornecedor" required>
                      @foreach ($fornecedores as $fornecedor)
                          <option>{{ $fornecedor->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  
                  <div class="botoes">
                    <button type="button" class="botao" onclick="history.back()">Cancelar</button>
                    <button type="submit" class="botao">Salvar</button>
                  </div>
                </fieldset>
              </form>
            </div>

</body>
</html>