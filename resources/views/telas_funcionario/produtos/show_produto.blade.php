@extends('layouts.funcionario')

@section('title', 'Detalhes do Produto')

<html>
<head>
    <meta charset="UTF-8">
    <title>Tela Show</title>
    
    <style>
        .image-container {
            width: 200px;
            height: 200px;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>


@section('content')
    <div class="container">
        <h3 class="page-title">Detalhes do Produto</h3>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nome: {{ $produto->nome }}</h5>
                <p class="card-text">Descrição: {{ $produto->descricao }}</p>
                <p class="card-text">Preço: {{ $produto->preco }}</p>
                <p class="card-text">Peso: {{ $produto->peso }}</p>
                <p class="card-text">Altura: {{ $produto->altura }}</p>
                <p class="card-text">Largura: {{ $produto->largura }}</p>
                 <p class="card-text">Comprimento: {{ $produto->comprimento }}</p>
               
               <div class = "image-container">
                <img src="{{$produto->imagem}}" alt="Imagem" class="product-image">
                </div>
               
        </div>




    </div>

    <p>&nbsp;</p>

</div>
@section('footer')
    <a class="texto_botao_generico" href="{{ route('produto.index') }}">
        <div class="botaoGenerico">
            Voltar
        </div>
        @endsection


@endsection

    