@extends ('layouts.funcionario')

@section('title', 'Gerenciamento Cupom')

@section('content')

    <body>
        <div class="container">
            <div class="TopSearch">
                <input class="input_search" title="ADICIONAR_TITULO_AQUI" placeholder="Pesquise aqui" type="text">
                <div class="display_line_info">
                    <div class="coluna_display_line">
                        <p class="text_display_line">Nome do Cupom</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">Valor de desconto</p>
                    </div>
                </div>
                <div class="display_generico_line">
                    @foreach ($cupons as $cupom)
                        <div class="display_line">
                            <a class="atag_line" href="{{ url('cupom/edit/' . $cupom['id']) }}">
                                <div class="coluna_display_line">
                                    <p class="text_display_line">{{ $cupom->nome }}</p>
                                </div>
                                <div class="coluna_display_line">
                                    <p class="text_display_line">{{ $cupom->desconto }}%</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @section('footer')
        <a class="texto_botao_generico" href="{{ route('cupom.create') }}">
            <div class="botaoGenerico">
                Adicionar
            </div>
        </a>
    @endsection
</body>

@endsection
