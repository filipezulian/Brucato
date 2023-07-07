<?php

namespace App\Http\Controllers;

use App\Models\EnderecoUsuario;
use Illuminate\Http\Request;

class EnderecoUsuarioController extends Controller
{

    public function index(){
        $enderecoUsuario = EnderecoUsuario::all();
        return view('home.enderecos', compact('enderecos'));
    }

    public function store(Request $request){

        EnderecoUsuario::create([
            'id_usuario' => $request->input('id_usuario'),
            'endereco' => $request->input('endereco'),
            'cep' => $request->input('cep')
        ]);

        return redirect()->route('home.enderecos');
    }

    public function edit(EnderecoUsuario $endereco){
        return view('home.enderecos', compact('enderecos'));
    }

    public function update(Request $request, EnderecoUsuario $endereco){
        $endereco->id_usuario = $request->input("id_usuario");
        $endereco->endereco = $request->input("endereco");
        $endereco->cep = $request->input("cep");

        $endereco->save();

        return redirect()->route('home.enderecos');
    }   
}
