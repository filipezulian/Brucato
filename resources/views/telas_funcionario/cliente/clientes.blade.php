@extends ('layouts.funcionario')

@section('title', 'Gerenciamento Clientes')

@section('content')
    <body>
                <div class="display_line_info">
                    <div class="coluna_display_line">
                        <p class="text_display_line">Nome</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">CPF</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">Telefone</p>
                    </div>
                    <div class="coluna_display_line">
                        <p class="text_display_line">Status</p>
                    </div>
                </div>
                <div class="display_generico_line">
                    @foreach ($users as $user)
                        <div class="display_line">
                            <a class="atag_line" href="{{ url('cliente/delete/' . $user['id']) }}">
                                <div class="coluna_display_line">
                                    <p class="text_display_line">{{ $user->name }}</p>
                                </div>
                                <div class="coluna_display_line">
                                    <p class="text_display_line">{{ $user->cpf }}</p>
                                </div>
                                <div class="coluna_display_line">
                                    <p class="text_display_line">{{ $user->telefone }}</p>
                                </div>
                                @if($user->id_funcionario)
                                <div class="coluna_display_line">
                                    <p class="text_display_line">Funcionario</p>
                                </div>  
                                @else
                                <div class="coluna_display_line">
                                    <p class="text_display_line">Cliente</p>
                                </div>   
                                @endif
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>

@endsection
