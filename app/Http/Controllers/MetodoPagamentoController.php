<?php

namespace App\Http\Controllers;

use App\Models\MetodoPagamento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MetodoPagamentoController extends Controller
{

    public function index(){
        $formasPagamento = MetodoPagamento::all();
        return view('home.formasPagamento', compact('formasPagamento'));
    }

    public function store(Request $request){
        $user = Auth::user();
        MetodoPagamento::create([
            'id_usuario' => $user->id,
            'numero_cartao' => $request->input('numero_cartao'),
            'nome_cartao' => $request->input('nome_cartao'),
            'validade_cartao' => $request->input('validade_cartao'),
            'cvv_cartao' => $request->input('cvv_cartao')
        ]);

        return redirect()->route('home.formasPagamento');
    }

    public function create(){
        return view('home.formasPagamento.add_formasPagamento');
    }

    public function edit(MetodoPagamento $formasPagamento){
        return view('home.formasPagamento.edit_formasPagamento', compact('formasPagamento'));
    }

    public function update(Request $request, MetodoPagamento $formasPagamento){
        $user = Auth::user();
        $formasPagamento->id_usuario = $user->id;
        $formasPagamento->numero_cartao = $request->input("numero_cartao");
        $formasPagamento->nome_cartao = $request->input("nome_cartao");
        $formasPagamento->validade_cartao = $request->input("validade_cartao");
        $formasPagamento->cvv_cartao = $request->input("cvv_cartao");

        $formasPagamento->save();

        return redirect()->route('home.formasPagamento');
    }   

    public function delete(MetodoPagamento $formasPagamento){
        $formasPagamento->delete();
        return redirect()->route('home.formasPagamento');
    }
}
