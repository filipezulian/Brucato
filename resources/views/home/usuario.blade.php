@extends ('layouts.generic')

@section('title', 'Usuario')

@section('content')

    <body>
        <header class="headerUsuario">
            <div class="nav_items_usuario">
                <img src="/img/user2.svg" alt="Icone do Usuário">
                <a class='nav_text_usuario'>Editar Perfil</a>
                <a class='nav_text_usuario' href="{{ url('pedidos') }}">Pedidos</a>
                <a class='nav_text_usuario' href="{{ url('enderecos') }}">Endereços</a>
                <a class='nav_text_usuario' href="{{ url('formasPagamento') }}">Formas de Pagamento</a>
                <div class="nav_btn_usuario">
                    <a href="{{ url('') }}"><button>Logout</button></a>
                </div>
            </div>
            <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em; background-color: #d9d9d9; padding-top: 1.5em">Editar Perfil</h1>
            <div class="main_usuario">
                <div class="box_main_usuario">
                    <form action="{{ route('home.update.usuario', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="">Nome:</label>
                        <div class="inputs_main_usuario">
                            <input type="text"value="{{ $user->name }}" name="name">
                        </div>
                        <label for="">Telefone:</label>
                        <div class="inputs_main_usuario" >
                            <input type="text" value="{{ $user->telefone }}" name="telefone">
                        </div>
                        <label for="">Email:</label>
                        <div class="inputs_main_usuario">
                            <input type="text" value="{{ $user->email }}" name="email">
                        </div>
                        <label for="">CPF:</label>
                        <div class="inputs_main_usuario">
                            <input type="text" value="{{ $user->cpf }}" name="cpf">
                        </div>
                        <div class="main_btn_usuario">
                            <button type="submit">Editar</button>
                        </div>
                    </form>
                    <form action="{{ route('usuario.delete', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick=" return confirmarDelete()" type="submit" class="btn_delete_usuario">Delete</button>
                    </form>
                </div>
            </div>
        </header>
    </body>

    <script>
        function confirmarDelete(){
            return confirm('Você tem certeza que deseja apagar o Usuário? Esta ação é irreversível!')
        }
    </script>

@endsection
