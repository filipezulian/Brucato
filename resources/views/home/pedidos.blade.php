@extends ('layouts.generic')

@section('title', 'Pedidos')

@section('content')

<body>
    <header class="headerUsuario">
        <div class="nav_items_usuario">
            <img src="/img/user2.svg" alt="Icone do Usuário">
            <a class='nav_text_usuario' href="{{ url('usuario') }}">Editar Perfil</a>
            <a class='nav_text_usuario'>Pedidos</a>
            <a class='nav_text_usuario' href="{{ url('enderecos') }}">Endereços</a>
            <a class='nav_text_usuario' href="{{ url('formasPagamento') }}">Formas de Pagamento</a>
            <div class="nav_btn_usuario">
                <a href="{{ url('') }}"><button>Logout</button></a>
            </div>
        </div>
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em; background-color: #d9d9d9;">Seus Pedidos</h1>
        <div class="main_pedido">
            <div class="display_line_info">
                <div class="coluna_display_line">
                    <p class="text_display_line_data">Data</p>
                </div>
                <div class="coluna_display_line">
                    <p class="text_display_line_nome">Pedido</p>
                </div>
                <div class="coluna_display_line">
                    <p class="text_display_line_status">Status</p>
                </div>
            </div>
            <div class="display_generico_line">
                <div class="display_line_info_pedidos">
                        <div class="coluna_display_line">
                            <p class="text_display_line_data">_Data_</p>
                        </div>
                        <div class="coluna_display_line">
                            <p class="text_display_line_nome">_Nome_</p>
                        </div>
                        <div class="coluna_display_line">
                            <p class="text_display_line_status">_Status_</p>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </header>
</body>
@endsection