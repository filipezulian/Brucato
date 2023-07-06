<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\Produto\StoreRequest;
use App\Http\Requests\Produto\UpdateRequest;



class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('telas_funcionario.produtos.produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('telas_funcionario.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produtos)
    {
        return view('telas_funcionario.produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
           var_dump('$produto');
        }

        $produtoTitle = ucwords($produto->nome);
        return view('telas_funcionario.produtos.editar_produtos', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Produto $produtos)
    {
        $produtos->update($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Produto $produtos)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produto.index');
    }
}



// $produto = Produto::find($request->id);
// $produto->nome = $request->nome;
// $produto->descricao = $request->descricao;
// $produto->peso = $request->peso;
// $produto->altura = $request->altura;
// $produto->largura = $request->largura;
// $produto->preco = $request->preco;
// $produto->update();