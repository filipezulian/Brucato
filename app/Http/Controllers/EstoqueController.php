<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Produto;
use App\Http\Requests\Estoque\StoreRequest;
use App\Http\Requests\Estoque\UpdateRequest;

//use Barryvdh\DomPDF\Facade\Pdf;
use PDF;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estoques = Estoque::with('produto')->get();
        $produtos = Produto::all();
        return view('telas_funcionario.estoque.estoque', compact('produtos', 'estoques'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produtos = Produto::all();
       return view('telas_funcionario.estoque.add_estoque', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produtoId = $request->produto_id; 
        Estoque::create($request->all());
       
        return redirect()->route('estoque.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_estoque)
    {

        $estoque = Estoque::with('produto')->findOrFail($id_estoque);
        $produto = $estoque->produto;
        return view('telas_funcionario.estoque.show_estoque', compact('estoque', 'produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_estoque)
    {
       // $estoque = Estoque::find($id);
       $estoques = Estoque::findOrFail($id_estoque);
       $produtos = Produto::get();
        return view('telas_funcionario.estoque.editar_estoque', compact('estoques', 'produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id_estoque)
    {
       
        $estoque = Estoque::find($id_estoque);
        $estoque->quantidade = $request->quantidade;
        $estoque->save();
       
        return redirect()->route('estoque.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_estoque)
    {
        $estoque = Estoque::find($id_estoque);
        $estoque->delete();
        return redirect()->route('estoque.index');
    }

    public function pdf()
    {
        $estoques = Estoque::orderBy('CEP')->get();
       // $estoques = Estoque::all();
    
        $pdf = PDF::loadView('telas_funcionario.estoque.pdf', compact( 'estoques'));
        return $pdf->stream();

    
    }

}
