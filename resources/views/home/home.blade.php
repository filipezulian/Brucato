@extends ('layouts.generic')

@section('title', 'Home')

@section('content')

<body>
    <div class="home_block">
        <p class="title_home_block">PRODUTOS EM DESTAQUE:</p>
        <div class="main_items_home_block">
            <span>{{$user->name}}</span>
            <span>{{$user->telefone}}</span>
            <span>{{$user->email}}</span>
            <span>{{$user->cpf}}</span>




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
                        <td>{{$produto->id_produto}}<td>
                        <td>
                            @if ($produto->imagem)
                            <img src="{{ asset('storage/'.$produto->imagem) }}" style="width: 100px; height: 100px; object-fit: cover;">

                            @endif
                        </td>
                        <td>{{$produto->nome}}</td>
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