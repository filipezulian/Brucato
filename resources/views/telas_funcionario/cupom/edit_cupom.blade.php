@extends ('layouts.funcionario')

@section('title', 'Editar Cupom')

@section('content')

<body>
    <div class="container_">
        <h1 style="color: #5c5c5c; text-align: center; margin-top:0.7em; padding:0.35em;height: 2em;">Editar Cupom</h1>
        <div class="container_editar_cupom">
            <form action="{{ route('cupom.update', $cupom->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form_editar_cupom">
                    <p class='cpf_label_login_cupom'>Nome:</p>
                    <input class="form-control formText seperate" value="{{ $cupom->nome }}" type="text" name="nome">
                    <p class='cpf_label_login'>Desconto(%):</p>
                    <input class="form-control formText seperate" value="{{ $cupom->desconto}}" type="text" name="desconto" onkeypress="return isNumber(event)" placeholder="00">
                    
                </div>
                <div class="main_btn_usuario_editar_cupom">
                    <button type="submit">Editar</button>
                </div>
            </form>
            <form action="{{ route('cupom.delete', $cupom->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="main_btn_usuario_deletar">
                    <button type="submit">Delete</button>
                </div>
            </form>
        </div>
        @section('footer')
        <a class="texto_botao_generico" href="{{ route('cupom.index') }}">
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