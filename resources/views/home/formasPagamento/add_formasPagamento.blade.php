@extends ('layouts.generic')

@section('title', 'Formas Pagamento')

@section('content')

<body>
    <div class="container">
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;">Adicionar Forma de Pagamento</h1>
        <form class="form" method="POST" action="{{ route('formasPagamento.store') }}">
            <div class="form_add_formaPagamento">
                @csrf
                <label for="id_usuario" class="label_generic_add_cupom" style="font-weight: 750;">Id Usuario:</label>
                <input type="text" id="id_usuario" class="form-control formText seperate" placeholder="Ex: 1" name="id_usuario" required>

                <label for="nome" class="label_generic_add_cupom" style="font-weight: 750;">Número:</label>
                <input type="text" id="numero_cartao" class="form-control formText seperate" placeholder="0000 0000 0000 0000" name="numero_cartao" required>

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">Tipo:</label>
                <input type="text" id="nome_cartao" class="form-control formText seperate" placeholder="Ex: Cartão Crédito BB" name="nome_cartao" required>

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">Data Vencimento:</label>
                <input type="text" id="validade_cartao" class="form-control formText seperate" placeholder="Ex: 12/28" name="validade_cartao" required>

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">CVV:</label>
                <input type="text" id="cvv_cartao" class="form-control formText seperate" placeholder="Ex: 123" name="cvv_cartao" required>

                <div class="main_btn_usuario_add_formaPagamento">
                    <button type="submit" class="btn_add_cupom">Adicionar</button>
                </div>
            </div>

        </form>

    </div>
    <div class="footer">
        <a class="texto_botao_generico" href="{{ url('formasPagamento') }}">
            <div class="botaoGenerico">
                Cancelar
            </div>
        </a>
    </div>
</body>

@endsection