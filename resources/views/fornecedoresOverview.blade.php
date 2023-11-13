<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styleprodutosOverview.css') }}">
    <title>Fornecedores</title>
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
            <a href="{{ route('produtosOverview') }}">Produtos</a>
            <a href="{{ route('fornecedoresOverview') }}">Fornecedores</a>
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
                <h3>Fornecedores</h3>
            </div>
            <br>
            <div class="content2">
                <div class="top-content">
                    <button>Novo Produto </button>
                    <button>Novo Fornecedor </button>
                    {{-- <a href="Novo Fornecedor">Novo Fornecedor</a> --}}
                    <h3>NomeDaEmpresa</h3>
                    <botaoVoltar><button><a href="{{ route('dashboard') }}">Voltar </a></button><botaoVoltar>
                </div>
                {{-- <p>Código Categoria NomeProduto QtdeProduto CustoProduto UltimaCompra</p> --}}
                <hr>
                <div class="listagem">
                  <p>Código</p>
                  <p>Categoria</p>
                  <p>NomeProduto</p>
                  <p>QtdeProduto</p>
                  <p>CustoProduto</p>
                  <p>UltimaCompra</p>
                </div>
                <hr>
            </div>

        </div>
    </section>

</body>
</html>
