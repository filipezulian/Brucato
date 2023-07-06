@extends ('layouts.funcionario')

@section('title', 'Gerenciamento Clientes')

@section('content')

<body>
    <div class="container">
        <div class="TopSearch">
            <input class="input_search" title="ADICIONAR_TITULO_AQUI" placeholder="Pesquise aqui" type="text">
            <div class="display_generico">
                <div class="item_display_generico">

                </div>
                <div class="item_display_generico">

                </div>
            </div>
        </div>
    </div>
    @section('footer')
   <a class="texto_botao_generico" href="">
    <div class="botaoGenerico">
        Adicionar
    </div>
   </a>
    @endsection
</body>

@endsection