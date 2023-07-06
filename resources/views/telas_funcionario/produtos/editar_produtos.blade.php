@extends ('layouts.funcionario')

@section('title', 'Editar Produtos')

@section('content')

<body>
    <div class="container">
        <form method="POST" action="{{url('prodfunc/update')}}">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{$produto->id}}" name="id">
            <div>
                <p class="">
                    Editar as informações desejadas de: <span style="font-weight: bold;"> {{$produtoUpper}} </span>
                </p>
            </div>
            <div class="form-group">
                <label for="nome" class="formText seperate" style="font-weight: 750;">Nome:</label>
                <input type="text" id="nome" value="{{$produto->nome}}" class="form-control formText seperate" name="nome">
            </div>

            <div class="form-group">
                <label for="preco" class="formText seperate" style="font-weight: 750;">Preço:</label>
                <input type="text" id="preco" value="{{$produto->preco}}" class="form-control formText seperate" name="preco">
            </div>
            <div class="form-group">
                <label for="descricao" class="" style="font-weight: 750;">Descrição:</label>
                <input type="text" id="descricao" value="{{$produto->descricao}}" class="form-control formText seperate" placeholder="Maximo de 250 Caracteres" name="descricao" required>
            </div>
            <div class="form-group">
                <label for="peso" class="" style="font-weight: 750;">Peso:</label>
                <input type="number" id="peso" step="0.01" value="{{$produto->peso}}" class="form-control formText seperate" placeholder="Peso em gramas(g)" pattern="\d+(\.\d{1,2})?" name="peso" min="0" required>
            </div>
            <div class="form-group">
                <label for="altura" class="" style="font-weight: 750;">Altura:</label>
                <input type="number" id="altura" step="0.01" value="{{$produto->altura}}" class="form-control formText seperate" placeholder="Altura em centimetros(cm)" pattern="\d+(\.\d{1,2})?" name="altura" min="0" required>
            </div>
            <div class="form-group">
                <label for="largura" class="" style="font-weight: 750;">Largura:</label>
                <input type="number" id="largura" step="0.01" value="{{$produto->largura}}" class="form-control formText seperate" placeholder="Largura em centimetros(cm)" pattern="\d+(\.\d{1,2})?" name="largura" min="0" required>
            </div>
            <div class="form-group">
                <label for="imagem" class="formText seperate" style="font-weight: 750;">Imagens:</label>
                <input type="file" id="imagem" class="form-control formText seperate" name="imagem">
            </div>
            <button type="submit" class=" h2botao">Editar</button>
        </form>
        <a href="{{ url('prodfunc/delete/' . $produto['id']) }}" style="color: #fafafa; font-weight:400; text-decoration: none; font-size:30px;">
            APAGAR
        </a>
    </div>
    </div>
    @section('footer')
    <a class="texto_botao_generico" href="{{ route('produto.index') }}">
        <div class="botaoGenerico">
            Voltar
        </div>
    </a>
    @endsection
</body>

@endsection