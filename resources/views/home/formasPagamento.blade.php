@extends ('layouts.generic')

@section('title', 'Endereços')

@section('content')

<body>
    <header class="headerUsuario">
        <div class="nav_items_usuario">
            <img src="/img/user2.svg" alt="Icone do Usuário">
            <a class='nav_text_usuario' href="{{ url('usuario') }}">Editar Perfil</a>
            <a class='nav_text_usuario' href="{{ url('pedidos') }}">Pedidos</a>
            <a class='nav_text_usuario' href="{{ url('enderecos') }}">Endereços</a>
            <a class='nav_text_usuario'>Formas de Pagamento</a>
            <div class="nav_btn_usuario">
                <a href="{{ url('') }}"><button>Logout</button></a>
            </div>
        </div>
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em; background-color: #d9d9d9; padding-top: 0.7em">Formas de Pagamento</h1>
        <div class="main_pedido">
            <div class="display_line_info">
                <div class="coluna_display_line_top">
                    <p class="text_display_line">Número do Cartão</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line">Tipo</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line">Data Vencimento</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line">_Opções_</p>
                </div>
            </div>
            <div class="display_generico_line">
                <div class="display_line_info_pedidos">
                    <div class="coluna_display_line">
                        <p class="text_display_line">_Número do Cartão_</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">_Tipo_</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">_Data Vencimento_</p>
                    </div>
                    <div class="btns_formasPag">
                        <div class="main_btn_formasPag_editar">
                            <button type="submit">Editar</button>
                        </div>
                    </div>
                </div>
                <form>
                    @csrf
                    @method('DELETE')
                    <div class="main_btn_formasPag_delete">
                        <button onclick=" return confirmarDelete()" type="submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </header>
</body>

@endsection