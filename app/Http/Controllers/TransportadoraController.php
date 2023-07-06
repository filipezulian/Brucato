<?php

namespace App\Http\Controllers;

use App\Models\Transportadora;
use Illuminate\Http\Request;

class TransportadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transportadoras = Transportadora::all();

        return view('telas_funcionario.transportadora.transportadoras', compact('transportadoras'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('telas_funcionario.transportadora.add_transportadora');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transportadora::create([
            'nome_empresa' => $request->input('nome_empresa'),
            'telefone' => $request->input('telefone'),
            'nome_responsavel' => $request->input('nome_responsavel'),
            'preco_por_km' => $request->input('preco_por_km'),
            'cnpj' => $request->input('cnpj'),
            'cep' => $request->input('cep'),
        ]);
        return redirect()->route('transportadora.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transportadora $transportadora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transportadora $transportadora)
    {
        return view('telas_funcionario.transportadora.editar_transportadora', compact('transportadora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transportadora $transportadora)
    {
        $transportadora->nome_empresa = $request->input("nome_empresa");
        $transportadora->telefone = $request->input("telefone");
        $transportadora->nome_responsavel = $request->input("nome_responsavel");
        $transportadora->preco_por_km = $request->input("preco_por_km");
        $transportadora->cep = $request->input("cep");
        $transportadora->cnpj = $request->input("cnpj");

        $transportadora->save();


        return redirect()->route('transportadora.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Transportadora $transportadora)
    {
        $transportadora->delete();
        return redirect()->route('transportadora.index');
    }
}
