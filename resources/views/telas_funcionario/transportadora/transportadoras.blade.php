@extends ('layouts.funcionario')

@section('title', 'Home Transportadoras')

@section('content')

    <body>
        <div class="container">
            <div class="TopSearch">
                <input class="input_search" id="search-input" title="ADICIONAR_TITULO_AQUI" placeholder="Pesquise aqui"
                    type="text">
                <div class="display_line_info">
                    <div class="coluna_display_line">
                        <p class="text_display_line">Nome da Empresa</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">Preco por Km</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">CEP</p>
                    </div>
                </div>
                <div class="display_generico_line">
                    @foreach ($transportadoras as $transportadora)
                        <div class="display_line">
                            <a class="atag_line" href="{{ url('transportadora/edit/' . $transportadora['id']) }}">
                                <div class="coluna_display_line">
                                    <p class="text_display_line">{{ $transportadora->nome_empresa }}</p>
                                </div>
                                <div class="coluna_display_line">
                                    <p class="text_display_line">R${{ $transportadora->preco_por_km }}</p>
                                </div>
                                <div class="coluna_display_line">
                                    <p class="text_display_line">{{ $transportadora->cep }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @section('footer')
        <a class="texto_botao_generico" href="{{ route('transportadora.create') }}">
            <div class="botaoGenerico">
                Adicionar
            </div>
        </a>
    @endsection


</body>

@endsection
