@extends ('layouts.funcionario')

@section('title', 'Create Produto')

@section('content')

<body>
    <div class="container">
        <h1 style="color: #5c5c5c">Adicionar Produto</h1>
        <div class="form">
            <form method="POST" action="{{route('produto.store')}}">
                @csrf
                <div class="">
                    <label for="nome" class="" style="font-weight: 750;">Nome:</label>
                    <input type="text" id="nome" class="form-control formText seperate" placeholder="Maximo de 50 Caracteres" name="nome" required>
                </div>
                <div class="">
                    <label for="descricao" class="" style="font-weight: 750;">Descrição:</label>
                    <input type="text" id="descricao" class="form-control formText seperate" placeholder="Maximo de 250 Caracteres" name="descricao" required>
                </div>
                <div class="">
                    <label for="peso" class="" style="font-weight: 750;">Peso:</label>
                    <input type="number" id="peso" step="0.01" class="form-control formText seperate" placeholder="Peso em gramas(g)" pattern="\d+(\.\d{1,2})?" name="peso" min="0" required>
                </div>
                <div class="">
                    <label for="altura" class="" style="font-weight: 750;">Altura:</label>
                    <input type="number" id="altura" step="0.01" class="form-control formText seperate" placeholder="Altura em centimetros(cm)" pattern="\d+(\.\d{1,2})?" name="altura" min="0" required>
                </div>
                <div class="">
                    <label for="largura" class="" style="font-weight: 750;">Largura:</label>
                    <input type="number" id="largura" step="0.01" class="form-control formText seperate" placeholder="Largura em centimetros(cm)" pattern="\d+(\.\d{1,2})?" name="largura" min="0" required>
                </div>
                <div class="">
                    <label for="preco" class="formText seperate" style="font-weight: 750;">Preço:</label>
                    <input type="number" id="preco" step="0.01" class="form-control formText seperate" placeholder="R$0.00" pattern="\d+(\.\d{1,2})?" name="preco" min="0" required>
                </div>
                <div class="">
                    <label for="imagem" class="formText seperate" style="font-weight: 750;">Imagens:</label>
                    <input type="file" id="imagem" class="form-control formText seperate" name="imagem">
                </div>
                <button type="submit" class="">Adicionar</button>
            </form>
        </div>
    </div>
    @section('footer')
    <a class="texto_botao_generico" href="{{ route('produto.index') }}">
        <div class="botaoGenerico">
            Cancelar
        </div>
    </a>
    @endsection
</body>

@endsection