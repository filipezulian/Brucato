@extends ('layouts.funcionario')

@section('title', 'Editar produtos')

@section('content')


<head>
    <link href="{{ asset('css/css_func/estoque.css') }}" rel="stylesheet">
</head>


<body>
    <div class="container">
           
        <div class="form">
        <div class="scroll-view"> 
            
        <form method="POST" action="{{route('produto.update', ['id_produto'=> $produtos -> id_produto]  )}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
            
        <style>
        .scroll-view{
            heigth: 300px;
            overflow-y: scroll;
        }

        
        </style>

        </style>

        
            <div>
                <p class="formText seperate">
                    Editar as informações desejadas de: 
                </p>
            </div>
            <div class="form-group">
                <label for="nome" class="formText seperate" style="font-weight: 750;">Nome:</label>
                <input type="text" id="nome" value="{{$produtos->nome}}" class="form-control formText seperate" name="nome">
            </div>
            <div class="form-group">
                <label for="descricao" class="formText seperate" style="font-weight: 750;">Descrição:</label>
                <input type="text" id="descricao" value="{{$produtos->descricao}}" class="form-control formText seperate" placeholder="Maximo de 250 Caracteres" name="descricao" required>
            </div>
            <div class="form-group">
                <label for="peso" class="formText seperate" style="font-weight: 750;">Peso:</label>
                <input type="number" id="peso" step="0.01" value="{{$produtos->peso}}" class="form-control formText seperate" placeholder="Peso em gramas(g)" pattern="\d+(\.\d{1,2})?" name="peso" min="0" required>
            </div>
            <div class="form-group">
                <label for="altura" class="formText seperate" style="font-weight: 750;">Altura:</label>
                <input type="number" id="altura" step="0.01" value="{{$produtos->altura}}" class="form-control formText seperate" placeholder="Altura em centimetros(cm)" pattern="\d+(\.\d{1,2})?" name="altura" min="0" required>
            </div>
            <div class="form-group">
                <label for="largura" class="formText seperate" style="font-weight: 750;">Largura:</label>
                <input type="number" id="largura" step="0.01" value="{{$produtos->largura}}" class="form-control formText seperate" placeholder="Largura em centimetros(cm)" pattern="\d+(\.\d{1,2})?" name="largura" min="0" required>
            </div>
            <div class="form-group">
                    <label for="comprimento" class="formText seperate" style="font-weight: 750;">Comprimento:</label>
                    <input type="number" id="comprimento" value="{{$produtos->comprimento}}" class="form-control formText seperate" name="comprimento" >
                </div>
            <div class="form-group">
                <label for="preco" class="formText seperate" style="font-weight: 750;">Preço:</label>
                <input type="text" id="preco" value="{{$produtos->preco}}" class="form-control formText seperate" name="preco">
            </div>
            <div class="form-group">
                <label for="imagem" class="formText seperate" style="font-weight: 750;">Imagens:</label>
                <input type="file" id="imagem" value="{{$produtos->imagem}}" class="form-control formText seperate" name="imagem">
            </div>



            <button type="submit" class = "btn btn-primary">Editar</button>

        </form>

      <form method="POST" action="{{ route('produto.delete', ['id_produto' => $produtos->id_produto]) }}">
      @csrf
            @method('DELETE')

            <button type="submit"  class="btn btn-danger">Excluir</button>
          
        </form>
            
    </div>
    </div>
<p>&nbsp;</p>

    </div>
</body>
@endsection

    @section('footer')
    <a class="texto_botao_generico" href="{{ route('produto.index') }}">
        <div class="botaoGenerico">
            Voltar
        </div>
    </a>
    @endsection

