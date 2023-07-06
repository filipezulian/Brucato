@extends ('layouts.funcionario')

@section('title', 'Add Cupom')

@section('content')

<body>
    <div class="container">
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;">Adicionar Cupom</h1>
        <form class="form" method="POST" action="{{ route('cupom.store') }}">
            <div class="form_add_cupom">
                @csrf
                <label for="nome" class="label_generic_add_cupom" style="font-weight: 750;">Nome:</label>
                <input type="text" id="cupom" class="form-control formText seperate" placeholder="Maximo de 15 Caracteres" name="nome" required>

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">Desconto(%):</label>
                <input type="text" id="desconto" onkeypress="return isNumber(event)" class="form-control formText seperate" placeholder="00" name="desconto" required>
                <div class="main_btn_usuario_add_cupom">
                    <button type="submit" class="btn_add_cupom">Adicionar</button>
                </div>
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