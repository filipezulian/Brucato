@extends('layouts.funcionario')

@section('title', 'Detalhes do Produto')

@section('content')
    <div class="container">
        <h3 class="page-title">Detalhes do Estoque</h3>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID estoque: {{ $estoque->id_estoque }}</h5>
                <p class="card-text">Produto: {{ $produto->nome }}</p>
                <p class="card-text">CEP: {{ $estoque->CEP }}</p>
                <p class="card-text">Referencia local: {{ $estoque->nome_local }}</p>
                <p class="card-text">Quantidade: {{ $estoque->quantidade }}</p>
           
            </div>
        </div>


       



    </div>

    <p>&nbsp;</p>

</div>
@section('footer')
    <a class="texto_botao_generico" href="{{ route('estoque.index') }}">
        <div class="botaoGenerico">
            Voltar
        </div>
        @endsection



@endsection
