<?php

namespace App\Http\Controllers;

use App\Models\EnderecoUsuario;
use Illuminate\Http\Request;

class EnderecoUsuarioController extends Controller
{

    public function index(){
        $enderecos = EnderecoUsuario::all();
        return view('home.enderecos', compact('enderecos'));
    }

    public function store(Request $request){

        EnderecoUsuario::create([
            'id_usuario' => $request->input('id_usuario'),
            'endereco' => $request->input('endereco'),
            'complemento' => $request->input('complemento'),
            'cep' => $request->input('cep')
        ]);

        return redirect()->route('home.enderecos');
    }

    public function create(){
        return view('home.enderecos.add_enderecos');
    }

    public function edit(EnderecoUsuario $enderecos){
        return view('home.enderecos.edit_enderecos', compact('enderecos'));
    }

    public function update(Request $request, EnderecoUsuario $enderecos){
        $enderecos->id_usuario = $request->input("id_usuario");
        $enderecos->endereco = $request->input("endereco");
        $enderecos->complemento = $request->input("complemento");
        $enderecos->cep = $request->input("cep");

        $enderecos->save();

        return redirect()->route('home.enderecos');
    }     

    public function delete(EnderecoUsuario $enderecos){
        $enderecos->delete();
        return redirect()->route('home.enderecos');
    }
}
