@extends ('layouts.generic')

@section('title', 'Home')

@section('content')

<body>
    <div class="home_block">
        <p class="title_home_block">PRODUTOS EM DESTAQUE:</p>
        <div class="main_items_home_block">
            <span>{{$user->name}}</span>
            <span>{{$user->telefone}}</span>
            <span>{{$user->email}}</span>
            <span>{{$user->cpf}}</span>
        </div>
    </div>
</body>

@endsection