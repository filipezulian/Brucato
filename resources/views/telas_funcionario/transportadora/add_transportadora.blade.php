@extends ('layouts.funcionario')

@section('title', 'Add Transportadora')

@section('content')

    <body>
        <div class="container">
            <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;" >Adicionar Transportadora</h1>
            <form class="form" method="POST" action="{{ route('transportadora.store') }}">
                
                    @csrf
                    <label for="nome" class="label_generic" style="font-weight: 750;">Nome da transportadora:</label>
                    <input type="text" id="nome_empresa" class="form-control formText seperate"
                        placeholder="Maximo de 50 Caracteres" name="nome_empresa" required>

                    <label for="descricao" class="label_generic" style="font-weight: 750;">CNPJ:</label>
                    <input type="text" id="Telefone" class="form-control formText seperate"
                        placeholder="Maximo de 14 Caracteres" name="cnpj" required>

                    <label for="descricao" class="label_generic" style="font-weight: 750;">Telefone:</label>
                    <input type="text" id="Telefone" class="form-control formText seperate"
                        placeholder="Maximo de 11 Caracteres" name="telefone" required>

                    <label for="descricao" class="label_generic" style="font-weight: 750;">Nome Gerente:</label>
                    <input type="text" id="Telefone" class="form-control formText seperate"
                        placeholder="Maximo de 250 Caracteres" name="nome_responsavel" required>

                    <label for="descricao" class="label_generic" style="font-weight: 750;">Preco por kilometro:</label>
                    <input type="text" id="Telefone" class="form-control formText seperate" placeholder="$/km"
                        name="preco_por_km" required>

                    <label for="descricao" class="label_generic_cep" style="font-weight: 750;">CEP:</label>
                    <input type="text" id="Telefone" class="form-control formText seperate"
                        placeholder="Maximo de 8 Caracteres" name="cep" required>
                    <button type="submit" class="btn btn-dark">Adicionar</button>
                
            </form>
        </div>
    @section('footer')
        <a class="texto_botao_generico" href="{{ route('transportadora.index') }}">
            <div class="botaoGenerico">
                Cancelar
            </div>
        </a>
    @endsection
</body>

@endsection
