<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styledashboard.css') }}">
    <title>Dashboard</title>
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
            <a href="{{ route('produto.show') }}">Produtos</a>
            <a href="{{ route('fornecedor.show') }}">Fornecedores</a>
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

        </div>
    </section>

</body>
</html>

































{{-- <div class="Telainicialadm" style="width: 1280px; height: 729px; position: relative; background: white">
  <div class="Rectangle3" style="width: 229px; height: 838px; left: -13px; top: -7px; position: absolute; background: #717C89; border: 5px #8AAE5C solid"></div>
  <div class="Rectangle4" style="width: 1280px; height: 85px; left: 0px; top: 0px; position: absolute; background: #717C89"></div>
  <div class="Rectangle5" style="width: 280px; height: 174px; left: 285px; top: 129px; position: absolute; background: #8AAE5C; border-radius: 15px"></div>
  <img class="Rectangle25" style="width: 68px; height: 68px; left: 459px; top: 141px; position: absolute" src="https://via.placeholder.com/68x68" />
  <div class="Rectangle6" style="width: 280px; height: 174px; left: 608px; top: 129px; position: absolute; background: #8AAE5C; border-radius: 15px"></div>
  <div class="Rectangle7" style="width: 280px; height: 174px; left: 929px; top: 129px; position: absolute; background: #8AAE5C; border-radius: 15px"></div>
  <div class="EditarCriarItem" style="left: 1000px; top: 225px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Editar/Criar Item</div>
  <img class="Rectangle8" style="width: 432px; height: 286px; left: 308px; top: 387px; position: absolute; border-radius: 30px; border: 3px #8AAE5C solid" src="https://via.placeholder.com/432x286" />
  <img class="Rectangle9" style="width: 432px; height: 286px; left: 756px; top: 387px; position: absolute; border-radius: 30px; border: 3px #8AAE5C solid" src="https://via.placeholder.com/432x286" />
  <div class="ItensNoEstoque" style="left: 365px; top: 224px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Itens no estoque</div>
  <div class="ProdutosCadastrados" style="left: 342px; top: 262px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Produtos cadastrados</div>
  <div class="ItensComEstoqueZerado" style="left: 659px; top: 224px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Itens com estoque zerado</div>
  <div class="ItensComEstoqueBaixo" style="left: 655px; top: 262px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Itens com estoque baixo</div>
  <div class="Gerenciamento" style="left: 20px; top: 100px; position: absolute; color: black; font-size: 20px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Gerenciamento</div>
  <div class="MovimentaO" style="left: 23px; top: 320px; position: absolute; color: black; font-size: 20px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Movimentação</div>
  <div class="AdministraO" style="left: 24px; top: 530px; position: absolute; color: black; font-size: 20px; font-family: Poppins; font-weight: 700; word-wrap: break-word">Administração</div>
  <div class="Produtos" style="left: 26px; top: 150px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Produtos</div>
  <div class="Entrada" style="left: 26px; top: 370px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Entrada</div>
  <div class="UsuRios" style="left: 26px; top: 580px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Usuários</div>
  <div class="LogDeAtividades" style="left: 26px; top: 630px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Log de Atividades</div>
  <div class="SaDa" style="left: 26px; top: 420px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Saída</div>
  <div class="Categorias" style="left: 26px; top: 200px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Categorias</div>
  <div class="Fornecedores" style="left: 26px; top: 250px; position: absolute; color: black; font-size: 16px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Fornecedores</div>
  <div class="Line1" style="width: 216.01px; height: 0px; left: -0px; top: 295px; position: absolute; border: 5px #8AAE5C solid"></div>
  <div class="Line3" style="width: 216.01px; height: 0px; left: 0px; top: 516px; position: absolute; border: 5px #8AAE5C solid"></div>
  <div class="Line2" style="width: 1300px; height: 0px; left: 0px; top: 90px; position: absolute; border: 5px #8AAE5C solid"></div>
  <div class="VocEstLogadoComoAdmin" style="left: 886px; top: 7px; position: absolute; color: black; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Você está logado como: ADMIN</div>
  <div class="Ip123456780" style="left: 1057px; top: 37px; position: absolute; color: black; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">IP: 123.456.78.0</div>
  <div class="Unistock" style="width: 150px; height: 40px; left: 565px; top: 22px; position: absolute; color: black; font-size: 30px; font-family: Poppins; font-weight: 700; word-wrap: break-word">UniStock</div>
  <img class="Ellipse1" style="width: 54px; height: 46px; left: 1211px; top: 19px; position: absolute; border-radius: 9999px; border: 3px black solid" src="https://via.placeholder.com/54x46" />
  <div class="Projetointegrador" style="left: 8px; top: 29px; position: absolute; color: black; font-size: 15px; font-family: Poppins; font-weight: 600; word-wrap: break-word">ProjetoIntegrador</div>
  <img class="Rectangle11" style="width: 61px; height: 49px; left: 155px; top: 16px; position: absolute" src="https://via.placeholder.com/61x49" />
  <img class="Rectangle13" style="width: 68px; height: 68px; left: 319px; top: 141px; position: absolute" src="https://via.placeholder.com/68x68" />
  <img class="Rectangle26" style="width: 68px; height: 68px; left: 664px; top: 141px; position: absolute" src="https://via.placeholder.com/68x68" />
  <img class="Rectangle27" style="width: 68px; height: 68px; left: 772px; top: 141px; position: absolute" src="https://via.placeholder.com/68x68" />
  <img class="Rectangle28" style="width: 68px; height: 68px; left: 1035px; top: 141px; position: absolute" src="https://via.placeholder.com/68x68" />
  <div style="width: 34px; height: 40px; left: 327px; top: 208px; position: absolute; color: white; font-size: 30px; font-family: Monomaniac One; font-weight: 400; word-wrap: break-word">10</div>
  <div style="left: 303px; top: 246px; position: absolute; color: white; font-size: 30px; font-family: Monomaniac One; font-weight: 400; word-wrap: break-word">05</div>
  <div style="width: 33px; height: 41px; left: 618px; top: 207px; position: absolute; color: white; font-size: 30px; font-family: Monomaniac One; font-weight: 400; word-wrap: break-word">00</div>
  <div style="left: 618px; top: 246px; position: absolute; color: white; font-size: 30px; font-family: Monomaniac One; font-weight: 400; word-wrap: break-word">05</div>
</div> --}}
