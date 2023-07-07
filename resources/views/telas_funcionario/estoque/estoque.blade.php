@extends ('layouts.funcionario')

@section('title', 'Estoque funcionario')

@section('content')

<head>
    <link href="{{ asset('css/css_func/estoque.css') }}" rel="stylesheet">
</head>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-input').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>






<body>
    <div class="container">
        <div class="TopSearch">
            <h3 class="page-title">
                Gestão dos estoques
            </h3>

            <h5 class="page-title">
                Para editar aperte no ID, e para ver detalhes aperte no nome.
            </h5>


            <input class="input_search" id="search-input" title="ADICIONAR_TITULO_AQUI" placeholder="Pesquise aqui" type="text" style="margin: 0 0 1em 0;">



            <table class="table">
                <thead style="background-color: rgb(121, 157, 228);
    border-radius: 20px;height: 35px;">
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nome Produto</th>
                        <th scope='col'>Quantidade estoque</th>
                        <th scope='col'>CEP</th>
                        <th scope='col'>Ref local</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($estoques as $estoque)
                    <tr>
                        <th>
                            <a href="{{route('estoque.edit', $estoque->id_estoque)}}">
                                {{$estoque->id_estoque}}
                            </a>
                        </th>

                        <th>
                            <a href="{{ route('estoque.show', ['id_estoque' => $estoque->id_estoque]) }}">
                                {{$estoque->produto->nome}}
                            </a>
                        </th>

                        <td>{{$estoque->quantidade}} </td>
                        <td>{{$estoque->CEP}}</td>
                        <td>{{$estoque->nome_local}}</td>

                    </tr>
                    @endforeach
                </tbody>
                <table>


        </d
        iv>

        @section('footer')
        <a class="texto_botao_generico" href="{{ route('estoque.create') }}">
            <div class="botaoGenericoPlus">
                Adicionar Novo Estoque
            </div>
        </a>

        <a href="{{route('estoque.pdf', $estoque)}}" class="texto_botao_generico">
            <div class="botaoGenericoPlus">
                Gerar Relatorio de Estoque
            </div>
        </a>

        @endsection

    </div>
</body>

@endsection