@extends ('layouts.funcionario')

@section('title', 'Create Estoque')

@section('content')

<body>
    <div class="container">
        <h1 style="color: #5c5c5c; text-align: center; padding:0.35em;height: 2em;">Adicionar Novo Estoque</h1>
        <style>
            .scroll-view {
                overflow-y: scroll;
            }
        </style>
        <div class="form_addEstoque_func">
            <div class="scroll-view">
                <form method="POST" action="{{route('estoque.store')}}">


                    @csrf
                    <div class="">
                        <label for="id_produto" style="font-weight: 750;">Produto</label>
                        <select class="form-control" name="id_produto" id="id_produto">
                            @foreach ($produtos as $produto)
                            <option value="{{$produto->id_produto}}">{{$produto->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <label for="CEP" class="" style="font-weight: 750;">CEP:</label>
                        <input type="number" id="CEP" class="form-control formText seperate" placeholder="Maximo de 8 numeros" name="CEP" required>
                    </div>
                    <div class="">
                        <label for="nome_local" class="" style="font-weight: 750;">Nome do armazem:</label>
                        <input type="text" id="nome_local" class="form-control formText seperate" placeholder="Maximo de 100 caractres" name="nome_local" required>
                    </div>
                    <div class="">
                        <label for="quantidade" class="" style="font-weight: 750;">Quantidade:</label>
                        <input type="number" id="quantidade" class="form-control formText seperate" placeholder="ex: 20" pattern="\d+(\.\d{1,2})?" name="quantidade" required>
                    </div>
                    <button type="submit" class="btn_adicionar">Adicionar novo estoque</button>

                </form>
            </div>
        </div>
    </div>
    @section('footer')
    <a class="texto_botao_generico" href="{{ route('estoque.index') }}">
        <div class="botaoGenerico">
            Cancelar
        </div>
    </a>
    @endsection
</body>

@endsection