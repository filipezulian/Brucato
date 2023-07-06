@extends ('layouts.generic')

@section('title', 'Endereços')

@section('content')

    <body>
        <header class="headerUsuario">
            <div class="nav_items_usuario">
                <img src="/img/user2.svg" alt="Icone do Usuário">
                <a class='nav_text_usuario' href="{{ url('usuario') }}">Editar Perfil</a>
                <a class='nav_text_usuario' href="{{ url('pedidos') }}">Pedidos</a>
                <a class='nav_text_usuario'>Endereços</a>
                <a class='nav_text_usuario' href="{{ url('formasPagamento') }}">Formas de Pagamento</a>
                <div class="nav_btn_usuario">
                    <a href="{{ url('') }}"><button>Logout</button></a>
                </div>
            </div>
            <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em; background-color: #d9d9d9; padding-top: 1.5em">Editar Endereço</h1>
            <div class="main_usuario">
                <div class="box_main_usuario">
                    <form action="{{ route('home.update.usuario', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="">Endereço:</label>
                        <div class="inputs_main_usuario">
                            <input type="text" value="_pegar_endereco_" name="name">
                        </div>
                        <label for="">Complemento:</label>
                        <div class="inputs_main_usuario" >
                            <input type="text" value="_pegar_endereco_" name="telefone">
                        </div>
                        <label for="">CEP:</label>
                        <div class="inputs_main_usuario">
                            <input type="text" value="_pegar_endereco_" name="email">
                        </div>
                        <div class="main_btn_usuario">
                            <button type="submit">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </header>
    </body>

@endsection
