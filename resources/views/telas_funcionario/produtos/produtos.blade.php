@extends ('layouts.funcionario')

@section('title', 'Home Funcionario')

@section('content')

<body>
    <div class="container">
        <div class="TopSearch">
            <input class="input_search" id="search-input" title="ADICIONAR_TITULO_AQUI" placeholder="Pesquise aqui" type="text">
            <div class="display_generico">
                @foreach ($produtos as $produto)
                <div class="item_display_generico">
                    <a class="atag_generico" href="{{ url('prodfunc/edit/' . $produto['id']) }}">
                        <div class="img_produto">ADD IMG</div>
                        <p class="text_produto">{{ $produto->nome }}</p>
                        <p class="text_produto">R${{ number_format($produto->preco, 2) }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @section('footer')
    <a class="texto_botao_generico" href="{{ route('produto.create') }}">
        <div class="botaoGenerico">
            Adicionar
        </div>
    </a>
    @endsection
    

</body>

@endsection