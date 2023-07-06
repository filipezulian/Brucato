<?php

namespace App\Http\Controllers;

use App\Models\Cupom;
use Illuminate\Http\Request;

class CupomController extends Controller
{
    public function index(){
        $cupons = Cupom::all();
        return view('telas_funcionario.cupom.cupom', compact('cupons'));
    }

    public function store(Request $request){

        Cupom::create([
            'nome' => $request->input('nome'),
            'desconto' => $request->input('desconto'),
        ]);

        return redirect()->route('cupom.index');
    }

    public function create(){
        return view('telas_funcionario.cupom.add_cupom');
    }

    public function edit(Cupom $cupom){
        return view('telas_funcionario.cupom.edit_cupom', compact('cupom'));
    }

    public function update(Request $request, Cupom $cupom){
        $cupom->nome = $request->input("nome");
        $cupom->desconto = $request->input("desconto");

        $cupom->save();

        return redirect()->route('cupom.index');
    }   

    public function delete(Cupom $cupom){
        $cupom->delete();
        return redirect()->route('cupom.index');
    }
}
