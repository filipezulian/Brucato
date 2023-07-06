<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- JavaScript-->
    <script src="app.js"></script>

    <!-- Fontes do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- CSS Funcionario -->
    <link rel="stylesheet" href="/css/css_produto/tela_inicial.css">

</head>

<body>
    <header class="headerGeneric">
        <img class="header_img" src="/img/logo_preto.png" alt="Brucato">
        <div class="nav_items">
            <a class='nav_text' href="{{url('home')}}">Home</a>
            <a class='nav_text' href="{{url('produto')}}">Produtos</a>
            <a href="{{route('home.carrinho')}}" class='nav_text'>Carrinho</a>
            <a href="{{url('usuario')}}"><img class="user_img" src="/img/user.png" alt="Usuario"></a>
        </div>
    </header>
    @yield('content')
</body>

</html>