@extends ('layouts.generic')

@section('title', 'Adicionar Endereços')

@section('content')

<body>
    <div class="container">
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;">Adicionar Endereços</h1>
        <form class="form" method="POST" action="{{ route('enderecos.store') }}">
            <div class="form_add_enderecos">
                @csrf
                <label for="nome" class="label_generic_add_cupom" style="font-weight: 750;">Endereço:</label>
                <input type="text" id="endereco" class="form-control formText seperate" placeholder="Ex: Rua Francisco " name="endereco" required>

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">Complemento:</label>
                <input type="text" id="complemento" class="form-control formText seperate" placeholder="Ex: CASA" name="complemento" required>

                <label for="descricao" class="label_generic_add_cupom" style="font-weight: 750;">CEP:</label>
                <input type="text" id="cep" class="form-control formText seperate" placeholder="Ex: 89456123" name="cep" required>

                <div class="main_btn_usuario_add_formaPagamento">
                    <button type="submit" class="btn_add_cupom">Adicionar</button>
                </div>
            </div>

        </form>

    </div>
    <div class="footer">
        <a class="texto_botao_generico" href="{{ url('enderecos') }}">
            <div class="botaoGenerico">
                Cancelar
            </div>
        </a>
    </div>
</body>

@endsection