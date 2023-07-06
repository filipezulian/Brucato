@extends ('layouts.layoutlogin')

@section('title', 'Brucato Cadastro')

@section('content')

    <body>
        <div class="container">
            <img class=logo src="/img/LOGO.png" alt="BRUCATO AUTOPEÇAS">
        </div>
        <div class="opcao_cadastro">
            <div class="form_cadastro">
                <form action="" method="POST">
                    @csrf
                    <p class='titulo_cadastro'>Cadastro</p>
                    <div class="col-1">

                        <p class='cpf_label_login'>Nome:</p>
                        <input class="input_cadastro" type="text" name="name">

                        <p class='cpf_label_login'>Email:</p>
                        <input class="input_cadastro" type="text" name="email">                        

                        <p class='cpf_label_login'>Senha:</p>
                        <input class="input_cadastro" type="password" name="password">

                    </div>
                    <div class="col-2">

                        <p class='cpf_label_login'>CPF:</p>
                        <input class="input_cadastro" type="text" name="cpf" onkeypress="return isNumber(event)">

                        <p class='cpf_label_login'>Telefone:</p>
                        <input class="input_cadastro" type="text" name="telefone">

                        <p class='cpf_label_login'>Endereço:</p>
                        <input class="input_cadastro" type="text" name="endereco">

                        <p class='cpf_label_login'>CEP:</p>
                        <input class="input_cadastro" type="text" name="cep">                        

                    </div>
                    <div class="btns_cadastro">
                        <div class='btn_voltar_cadastro'>
                            <button>Voltar</button>
                        </div>
                        <div class='btn_adicionar_cadastro'>
                            <button type="submit">Adicionar</button>

                        </div>
                </form>
            </div>

        </div>
        <a href="{{ url('') }}" class="fonte_cadastro">Caso já tenha uma conta, faça o login aqui</a>

        </div>
    </body>

    <script>
        function isNumber(event) {
            var caractere = (event.which) ? event.which : event.keyCode;
            if (caractere > 31 && (caractere < 48 || caractere > 57)) {
                event.preventDefault();
                return false;
            }
            return true;
        }
    </script>
@endsection
