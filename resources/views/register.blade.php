{{-- @extends('layouts.layout') --}}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <title>Login</title>
</head>
<body>
<!-- method="POST" action= "{{ route('login') }}" -->
    <form class="form" action="{{ route('user.create' )}} " method="post">
        @csrf
        <div class="title">Registre-se<br><span>Crie sua conta para continuar</span></div>
          <input type="text" placeholder="ID" name="idUsuario" class="input">
          <input type="password" placeholder="Senha" name="password" class="input">
          <div class="login-with">
        </div>
        <div>
          <button class="button-confirm" type="button" onclick="history.back()">Cancelar</button>
          <button class="button-confirm" type="submit">Registrar</button>
        </div>
      </form>
</body>
</html>
