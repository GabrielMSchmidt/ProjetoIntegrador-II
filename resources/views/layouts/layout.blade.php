<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
      @include('layouts.header')
    </header>

    <section class="main">
        @include('layouts.menu')

        <div class="content">
            @yield('content')
        </div>
    </section>
</body>
</html>
