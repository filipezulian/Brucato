<?php

namespace App\Http\Controllers;

use App\Models\EnderecoUsuario;
use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{

public function index()
{
    return view('auth.cadastro');
}

public function create()
{
    //
}

public function store(Request $request)
{
    $user = User::create([
        'name' => $request->input('name'),
        'cpf' => $request->input('cpf'),
        'telefone' => $request->input('telefone'),
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ]);
    
    $endereco_usuario = EnderecoUsuario::create([
        'id_usuario' => $user->id,
        'endereco' => $request->input('endereco'),
        'cep' => $request->input('cep'),
    ]);

    return redirect()->route('login.index');
}

public function show(int $id)
{
    //
}

public function search()
{
    //
}

public function edit($id)
{
    $user = User::findOrFail($id);

    return view('editar_usuario', ['user' => $user]);
}

public function update(Request $request, $id){
    $user = User::findOrFail($id);

    $user->name = $request->input("name");
    $user->telefone = $request->input("telefone");
    $user->email = $request->input("email");
    $user->cpf = $request->input("cpf");

    $user->save();
    
}

public function delete($id)
{
    //
}

}