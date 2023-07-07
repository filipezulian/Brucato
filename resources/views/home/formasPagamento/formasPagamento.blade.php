@extends ('layouts.generic')

@section('title', 'Formas de Pagamento')

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
            <div class="display_line_info" >
                <div class="coluna_display_line_top">
                    <p class="text_display_line" style="margin-left: 3em;">Número do Cartão</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line" style="margin-left: 5em;">Nome Cartão</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line" style="margin-left: 4em;">Data Vencimento</p>
                </div>
                <div class="coluna_display_line_top">
                    <p class="text_display_line" style="margin-left: 6em;">CVV</p>
                </div>
            </div>
            <div class="display_generico_line">
                <div class="display_generico_line">
                    @foreach ($formasPagamento as $formasPagamento)
                    <div class="display_line">
                        <a class="atag_line" href="{{ url('formasPagamento/edit/' . $formasPagamento['id']) }}" style="font-weight: 600;">
                            <div class="coluna_display_line">
                                <p class="text_display_line">{{ $formasPagamento->numero_cartao }}</p>
                            </div>
                            <div class="coluna_display_line">
                                <p class="text_display_line">{{ $formasPagamento->nome_cartao }}</p>
                            </div>
                            <div class="coluna_display_line">
                                <p class="text_display_line">{{ $formasPagamento->validade_cartao }}</p>
                            </div>
                            <div class="coluna_display_line">
                                <p class="text_display_line">{{ $formasPagamento->cvv_cartao }}</p>
                            </div>

                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <a class="texto_botao_generico" href="{{ route('formasPagamento.create') }}">
                <div class="btn_add_formasPagamento">
                    Adicionar
                </div>
            </a>
        </div>
    </header>
</body>

@endsection