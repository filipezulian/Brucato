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
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em; background-color: #d9d9d9; padding-top: 0.7em">Endereços</h1>
        <div class="main_pedido">
            <div class="display_line_info" >
                <div class="coluna_display_line_top">
                    <p class="text_display_line" style="margin-left: 3em;">Endereço</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line" style="margin-left: 4em;">Complemento</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line" style="margin-left: 6em;">CEP</p>
                </div>
            </div>
            <div class="display_generico_line">
                <div class="display_generico_line">
                    @foreach ($enderecos as $enderecos)
                    <div class="display_line">
                        <a class="atag_line" href="{{ url('enderecos/edit/' . $enderecos['id']) }}" style="font-weight: 600;">
                            <div class="coluna_display_line">
                                <p class="text_display_line">{{ $enderecos->endereco }}</p>
                            </div>
                            <div class="coluna_display_line">
                                <p class="text_display_line">{{ $enderecos->complemento }}</p>
                            </div>
                            <div class="coluna_display_line">
                                <p class="text_display_line">{{ $enderecos->cep }}</p>
                            </div>

                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <a class="texto_botao_generico" href="{{ route('enderecos.create') }}">
                <div class="btn_add_formasPagamento">
                    Adicionar
                </div>
            </a>
        </div>
    </header>
</body>

@endsection