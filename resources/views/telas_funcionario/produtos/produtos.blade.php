@extends ('layouts.funcionario')

@section('title', 'Produtos funcionario')

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
                Gestão dos Produtos.
            </h3>

            <h5 class="page-title">
                Para editar aperte no ID, e para ver detalhes aperte no nome.
            </h5>





            <input class="input_search" id="search-input" title="ADICIONAR_TITULO_AQUI" placeholder="Pesquise aqui" type="text">



            <table class="table" style="margin-top:1em; background-color: #fafafa;" >
                <thead style="background-color: rgb(121, 157, 228);
    border-radius: 20px;height: 35px;">
                    <tr>
                        <th scope='col'>ID </th>
                        <th scope='col'>Imagem</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>Descrição</th>
                        <th scope='col'>Preço</th>
                        <th scope='col'>Peso</th>
                        <th scope='col'>Altura</th>
                        <th scope='col'>Largura</th>
                        <th scope='col'>Comprimento</th>
                    </tr>
                </thead>
                <tbody class="showProducts_info">
                    @foreach ($produtos as $produto)
                    <tr>
                        <td>
                            <a href="{{route('produto.edit', $produto->id_produto)}}">
                                {{$produto->id_produto}}
                            </a>
                        </td>


                        <td>
                            @if ($produto->imagem)
                            <img src="{{ asset('storage/'.$produto->imagem) }}" style="width: 100px; height: 100px; object-fit: cover;">

                            @endif
                        </td>



                        <td>
                            <a href="{{route('produto.show', $produto->nome)}}">
                                {{$produto->nome}}
                            </a>
                        </td>



                        <td>{{$produto->descricao}}</td>
                        <td>R$&nbsp;{{$produto->preco}}</td>
                        <td>{{$produto->peso }}</td>
                        <td>{{$produto->altura }}</td>
                        <td>{{$produto->largura }}</td>
                        <td>{{$produto->comprimento }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <table>


        </div>
    </div>
</body>

@endsection

@section('footer')
<a class="texto_botao_generico" href="{{ route('produto.create') }}">
    <div class="botaoGenerico">
        Adicionar
    </div>
</a>
@endsection