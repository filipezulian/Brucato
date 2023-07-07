@extends ('layouts.generic')

@section('title', 'Editar Forma Pagamento')

@section('content')

<body>
    <div class="container">
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;">Editar Forma de Pagamento</h1>
        <form action="{{ route('formasPagamento.update', $formasPagamento->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form_editar_formaPagamento">

                <div style="display: none;">
                    <label for="id_usuario" class="label_generic_add_cupom" style="font-weight: 750;">Id Usuario:</label>
                    <input type="text" id="id_usuario" value='{{$formasPagamento->id_usuario}}' class="form-control formText seperate" name="id_usuario">
                </div>


                <label for="nome" class="label_generic_add_cupom" style="font-weight: 750;">Número:</label>
                <input type="text" value='{{$formasPagamento->numero_cartao}}' id="numero_cartao" class="form-control formText seperate" name="numero_cartao">

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">Tipo:</label>
                <input type="text" value='{{$formasPagamento->nome_cartao}}' id="nome_cartao" class="form-control formText seperate" name="nome_cartao">

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">Data Vencimento:</label>
                <input type="text" value='{{$formasPagamento->validade_cartao}}' id="validade_cartao" class="form-control formText seperate" name="validade_cartao">

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">CVV:</label>
                <input type="text" value='{{$formasPagamento->cvv_cartao}}' id="cvv_cartao" class="form-control formText seperate" name="cvv_cartao">
            </div>
            <div class="main_btn_usuario_editar">
                <button type="submit">Editar</button>
            </div>

        </form>
        <form action="{{ route('formasPagamento.delete', $formasPagamento->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="main_btn_usuario_deletar">
                <button type="submit">Delete</button>
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