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
      <form class="form" action="{{ route('user.store' )}} " method="post">
        @csrf
        @error('error')
            <span>{{ $message }}</span>
        @enderror
        <div class="title">Login<br><span>Faça o login para continuar</span></div>
          <input type="text" placeholder="ID" name="idUsuario" class="input">
          <input type="password" placeholder="Senha" name="password" class="input">
          <div class="login-with">
        </div>
        <div>
          <button class="button-confirm" type="button"><a href="{{ route('register') }}">Registrar</a></button>
          <button class="button-confirm" type="submit">Entrar</button>
        </div>
      </form>
</body>
</html>
