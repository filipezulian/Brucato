<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Produto;
use App\Http\Requests\Estoque\StoreRequest;
use App\Http\Requests\Estoque\UpdateRequest;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estoque = Estoque::all();
        $produtos = Produto::all();

        return view('telas_funcionario.estoque.index', compact('produtos', 'estoque'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produto = Produto::get();
       return view('telas_funcionario.estoque.create', compact('produto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        Estoque::create($request->all());
        return redirect()->route('estoque.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estoque $estoque)
    {
        return view('telas_funcionario.estoque.show', compact('estoque'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estoque $estoque)
    {
       // $estoque = Estoque::find($id);
       $produto = Produto::get();
        return view('telas_funcionario.estoque.show', compact('estoque', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Estoque $estoque)
    {
        $estoque ->update($request->all());
        return redirect()->route('estoque.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Estoque $estoque)
    {
        $estoque = Estoque::find($id);
        $estoque->delete();
        return redirect()->route('estoque.index');
    }
}
