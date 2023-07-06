@extends('layouts.layoutlogin')

@section('title', 'Estoque funcionario')

@section('content')

<body>
    <div class="container">
    <div class="TopSearch">
            <h2 class="page-title">
                Relatorio de estoque
            </h2>

            <h4 class="mb-4">
                Ordenado por CEP
            </h4>
         
            

            <table class="table">
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nome Produto</th>
                        <th scope='col'>Quantidade estoque</th>
                        <th scope='col'>CEP</th>
                        <th scope='col'>Referencia local</th>
                    </tr>
                </thead>

                <h4 class="mb-4"> </h4>

                <tbody>
                    @foreach ($estoques as $estoque)
                    <tr>
                        <th>{{$estoque->id_estoque}} </th>
                        <th>{{$estoque->produto->nome}}</th>
                        <td>{{$estoque->quantidade}} </td>
                        <td>{{$estoque->CEP}}</td>
                        <td>{{$estoque->nome_local}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            <div class="text-right">
                Data do Relatório: {{ date('d/m/Y') }}
            </div>


            </div>
    </div>
</body>

@endsection
