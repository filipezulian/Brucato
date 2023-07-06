@extends ('layouts.funcionario')

@section('title', 'Editar Transportadora')

@section('content')

<body>
    <div class="container_editar">
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;">Editar Transportadora</h1>
        <div class="container_editar">
            <div class="display_generico_line_editar">
                <form action="{{ route('transportadora.update', $transportadora->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-1">

                        <p class='cpf_label_login'>Nome da transportadora:</p>
                        <input class="input_cadastro" value="{{ $transportadora->nome_empresa }}" type="text" name="nome_empresa">

                        <p class='cpf_label_login'>CNPJ:</p>
                        <input class="input_cadastro" value="{{ $transportadora->cnpj }}" type="text" name="cnpj" onkeypress="return isNumber(event)">

                        <p class='cpf_label_login'>Telefone:</p>
                        <input class="input_cadastro" value="{{ $transportadora->telefone }}" type="text" name="telefone" onkeypress="return isNumber(event)">

                    </div>
                    <div class="col-2">

                        <p class='cpf_label_login'>Nome Gerente:</p>
                        <input class="input_cadastro" value="{{ $transportadora->nome_responsavel }}" type="text" name="nome_responsavel">

                        <p class='cpf_label_login'>Preço por kilometro:</p>
                        <input class="input_cadastro" value="{{ $transportadora->preco_por_km }}" type="text" name="preco_por_km" onkeypress="return isNumber(event)">

                        <p class='cpf_label_login'>CEP:</p>
                        <input class="input_cadastro" value="{{ $transportadora->cep }}" type="text" name="cep" onkeypress="return isNumber(event)">

                    </div>

                    <div class="main_btn_usuario_editar">
                        <button type="submit">Editar</button>
                    </div>
                </form>
                <form action="{{ route('transportadora.delete', $transportadora->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="main_btn_usuario_deletar">
                        <button type="submit">Delete</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    @section('footer')
    <a class="texto_botao_generico" href="{{ route('transportadora.index') }}">
        <div class="botaoGenerico">
            Cancelar
        </div>
    </a>
    @endsection
</body>
<script>
    function isNumber(event) {
        var caractere = (event.which) ? event.which : event.keyCode;
        if (caractere > 31 && (caractere < 48 || caractere > 57)) {
            event.preventDefault();
            return false;
        }
        return true;
    }
</script>

@endsection