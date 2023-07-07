@extends ('layouts.generic')

@section('title', 'Editar Endereço')

@section('content')

<body>
    <div class="container">
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;">Editar Endereço</h1>
        <form action="{{ route('enderecos.update', $enderecos->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form_editar_formaPagamento">

                <div style="display: none;">
                    <label for="id_usuario" class="label_generic_add_cupom" style="font-weight: 750;">Id Usuario:</label>
                    <input type="text" id="id_usuario" value='{{$enderecos->id_usuario}}' class="form-control formText seperate" name="id_usuario">
                </div>


                <label for="endereco" class="label_generic_add_cupom" style="font-weight: 750;">Endereço:</label>
                <input type="text" value='{{$enderecos->endereco}}' id="endereco" class="form-control formText seperate" name="endereco">

                <label for="complemento" class="label_generic_add_cupom" style="font-weight: 750;">Complemento:</label>
                <input type="text" value='{{$enderecos->complemento}}' id="complemento" class="form-control formText seperate" name="complemento">

                <label for="cep" class="label_generic_add_cupom" style="font-weight: 750;">CEP:</label>
                <input type="text" value='{{$enderecos->cep}}' id="cep" class="form-control formText seperate" name="cep">
            </div>
            <div class="main_btn_usuario_editar">
                <button type="submit">Editar</button>
            </div>

        </form>
        <form action="{{ route('enderecos.delete', $enderecos->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="main_btn_usuario_deletar">
                <button type="submit">Delete</button>
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