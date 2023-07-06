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
        <h1 style="color: #5c5c5c; text-align: center; margin-bottom: 0.8em;height: 1em;">Editar Produto</h1>

        <div class="card" style="border-radius: 20px; height: 39em;">
            <div class="card-body" style="margin: 1em; font-size: 1.4em;">
                <p class="card-title">Nome: {{ $produto->nome }}</p>
                <p class="card-title">Descrição: {{ $produto->descricao }}</p>
                <p class="card-title">Preço: {{ $produto->preco }}</p>
                <p class="card-title">Peso: {{ $produto->peso }}</p>
                <p class="card-title">Altura: {{ $produto->altura }}</p>
                <p class="card-title">Largura: {{ $produto->largura }}</p>
                <p class="card-title">Comprimento: {{ $produto->comprimento }}</p>

                <div class="image-container">
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