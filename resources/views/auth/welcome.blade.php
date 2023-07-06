@extends ('layouts.layoutlogin')

@section('title', 'Brucato')

@section('content')

    <body>
        <div class="container">
            <img class=logo src="/img/LOGO.png" alt="BRUCATO AUTOPEÇAS">
        </div>
        <div class="opcao_login">
            <p class="fonte_greeting">Bem vindo</p>
            <form action="{{ route('login.store') }}" method="post">
                <div class="form_login">
                    @csrf
                    <label class='titulo_login'>LOGIN</label>
                    @error('error')
                        <div class="msg_erro_login_div">
                            <span class="msg_erro_login">{{ $message }}</span>
                        </div>
                    @enderror
                    @error('email')
                        <div class="msg_erro_login_div">
                            <span class="msg_erro_login">{{ $message }}</span>
                        </div>
                    @enderror
                    @error('password')
                        <div class="msg_erro_login_div">
                            <span class="msg_erro_login">{{ $message }}</span>
                        </div>
                    @enderror
                    <label class='cpf_label_login'>Email:</label>
                    <input name="email" class="input_login" placeholder="Email" value="filzulan@hotmail.com" type="text">
                    <p class='cpf_label_login'>Senha:</p>
                    <input name="password" class="input_login" placeholder="Senha" value="password" type="password">
                    <button type="submit" class="btn btn-dark btn_entrar_login">Login</button>
                </div>
            </form>
            <a href="{{ url('cadastro') }}" class="fonte_cadastro">Caso não tenha uma conta, faça o cadastro aqui</a>
        </div>
    </body>
@endsection
