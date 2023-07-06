@extends ('layouts.generic')

@section('title', 'Carrinho')

@section('content')

<body >
    <div class="box_carrinho">
        <div class="box_carrinho_produto"></div>
        <div class="box_carrinho_total">
            <div class="title_text">
                <p class="title_text_normal">Produtos:</p>
                <p class="title_text_normal">Frete:</p>
                <p class="title_text_big">Total:</p>
            </div>
            <div class="valores_input">                
                <span class="input_valor">R$ Recebe Produto</span>       
                <span class="input_valor">R$ Recebe Frete</span>
                <span class="input_valor_total">R$ Recebe Total</span>
            </div>
        </div>
        <div class="box_carrinho_infos">
            <div class="row">
                <div class="col-2">
                    <div class="ta_endereco">
                        <div class="box_title_icon">
                            <p>Mudar Endereço</p>
                            <img src="/img/pencil.png" alt="editável" class="icon_pencil">
                        </div>                        
                        <input type="text" class="input_maior" readonly value="_pegar_endereco_usuario_">
                    </div>
                    <div class="ta_pagamento">
                        <div class="box_title_icon">
                            <p>Mudar forma de pagamento</p>
                            <img src="/img/pencil.png" alt="editável" class="icon_pencil">
                        </div>                        
                        <input type="text" class="input_maior" readonly>
                    </div>                    
                </div>
            </div>            
            <div class="ta_cupom">
                <form action="{{route('usuario.aplicarCupom')}}" method="POST">
                    @csrf
                <p>Aplicar cupom</p>
                <input type="text" name="cupom">
                <button type="submit" class="btn_aplicar_cupom">Aplicar</button>
                @error('cupom')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </form>
            </div>    
        </div>
        <div class="box_carrinho_btns">
            <button class="btn_continua_compra">Continuar Comprando</button>
            <button class="btn_finalizar">Finalizar</button>
        </div>
    </div>
</body>

@endsection