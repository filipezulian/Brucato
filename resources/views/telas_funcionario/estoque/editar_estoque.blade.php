@extends ('layouts.funcionario')

@section('title', 'Editar estoque')

@section('content')


<head>
    <link href="{{ asset('css/css_func/estoque.css') }}" rel="stylesheet">
</head>


<body>
    <div class="container">
           
        <div class="form">
        <div class="scroll-view"> 
            
        <form method="POST" action="{{route('estoque.update', ['id_estoque' => $estoques -> id_estoque]) }}">
            @csrf
            @method('PUT')
          
            
        <style>
        .scroll-view{
            heigth: 300px;
            overflow-y: scroll;
        }

        </style>

        
            <div>
                <p class="formText seperate">
                    Editar a quantidade do estoque: 
                </p>
            </div>
           

            <div class="form-group">
                <label for="quantidade" class="formText seperate" style="font-weight: 750;">Quantidade:</label>
                <input type="number" id="quantidade" step="1.00" value="{{$estoques->quantidade}}" class="form-control formText seperate" name="quantidade" required>
            </div>
    

            <button type="submit" class = "btn btn-primary">Editar</button>

            
        </form>


        <form method="POST" action="{{ route('estoque.delete', ['id_estoque' => $estoques->id_estoque]) }}">
         @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>





    </div>
    </div>
<p>&nbsp;</p>

    </div>
    @section('footer')
    <a class="texto_botao_generico" href="{{ route('estoque.index') }}">
        <div class="botaoGenerico">
            Voltar
        </div>
    </a>
    @endsection
</body>

@endsection