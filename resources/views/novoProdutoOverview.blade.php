<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styleBotoesGerencOverview.css') }}">
    <title>Produtos</title>
</head>
<body>

    <header>
      <div class="logo">
        <h5>ProjetoIntegrador</h5>
      </div>
      <div class="logo2">
        <a href="{{ route('dashboard') }}">UniStock</a>
      </div>
      <div class="logo3">
        <span>Você está logado como: ADMIN</span>
        <br>
        <span>IP: 123.456.78.0</span>
      </div>
    </header>

    {{-- FIM HEADER! --}}

    <section class="main">
        <div class="sidebar">
            <h3>Gerenciamento</h3>
            {{-- <a href="{{ route('produtosOverview') }}">Produtos</a> --}}
            <a>Produtos</a>
            {{-- <a href="{{ route('fornecedoresOverview') }}">Fornecedores</a> --}}
            <a>Fornecedores</a>
            <a href="Categorias">Categorias</a>
            <br><br><br><br><br>
            <hr>
            <h3>Movimentacao</h3>
            <a href="Entradas">Entradas</a>
            <a href="Saidas">Saidas</a>
            <br><br><br><br><br>
            <hr>
            <h3>Administração</h3>
            <a href="Usuarios">Usuários</a>
            <a href="logDeAtividades">Log de Atividades</a>
        </div>

        <div class="content">
            <div class="title">
                <br>
                <h1>Produtos</h1>
            </div>
            <br>

            <div class="content2">
                <div class="top-content">
                    {{-- <button type="submit" formaction="{{ route('dashboard')}}">Novo Produto</button> --}}
                    <button>Novo Produto</button>
                    {{-- <button>Novo Fornecedor </button> --}}
                    {{-- <a href="Novo Fornecedor">Novo Fornecedor</a> --}}
                    <h3>NomeDaEmpresa</h3>
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
                    <button type="menu" class="botao">Cancelar</button>
                    <button type="submit" class="botao">Salvar</button>
                  </div>
              </fieldset>
              </form>
            </div>

        </div>
    </section>

</body>
</html>
