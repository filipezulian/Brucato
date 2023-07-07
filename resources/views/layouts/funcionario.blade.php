<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Fontes do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- CSS Funcionario -->
    <link rel="stylesheet" href="/css/css_func/funcionario.css">



</head>

<body>
    <header class="headerGeneric">
        <div class="img_logo_func">
            <img class="header_img" src="/img/logo_preto.png" alt="Brucato">
        </div>
        <div class="nav_items">
            <a class="navItems" href="{{url('homeFunc')}}">Home</a>
            <a class="navItems" href="{{url('prodfunc')}}">Produtos</a>
            <a class="navItems" href="{{url('estfunc')}}">Estoque</a>
            <a class="navItems" href="{{url('cliente')}}">Clientes</a>
            <a class="navItems" href="{{url('')}}">_Pedidos_</a>
            <a class="navItems" href="{{url('transportadora')}}">Transportadoras</a>
            <a class="navItems" href="{{url('cupom')}}">Cupom</a>
        </div>
        <div class="img_icon_func">
            <a href="{{url('')}}"><img class="user_img" src="/img/user.png" alt="Usuario"></a>
        </div>
    </header>
    
    @yield('content')
    
    <footer>
    @yield('footer')
    </footer>
</body>

</html>