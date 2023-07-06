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
        return view('telas_funcionario.produtos.add_produtos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
       

       if ($request->hasFile('imagem') && $request->imagem->isValid()) {
      //$imagePath = $request->imagem->move('produtos', 'public');
          // dd($request->imagem->store('produtos'));
       // $data['imagem'] = $imagePath;
       

        //  $requestImage = $request->imagem;
        //  $extension = $requestImage->extension();
        //  $imageName = md5($requestImage->imagem->getClientOriginalNmae() . strtotime("now"));
        // $request->imagem->move(storage_path('app/public/produtos'), $imageName);
        // $event->imagem = $imageName;


    //      $file = $request->file('imagem');
    //      $image_name = time() . '_' . $file->getClientOriginalName();
    //      $file->move(storage_path('app/public/produtos'), $image_name);
     }

        $produto = Produto::create(array_merge($request->all()));
        //dd($request->imagem->store('produtos'));



        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($nome)
    {

        $produto = Produto::where('nome', $nome)->firstOrFail();
      //  return view('telas_funcionario.produtos.show', compact('produtos'));
        return view('telas_funcionario.produtos.show_produto', compact('produto'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_produto)
    {
        $produtos = Produto::findOrFail($id_produto);    
        // $produto = Produto::find($id);
        //$produtoTitle= ucwords($produtos->nome);
        return view('telas_funcionario.produtos.editar_produtos', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_produto)
    {
        $produto = Produto::find($id_produto);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->peso = $request->peso;
        $produto->altura = $request->altura;
        $produto->largura = $request->largura;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->save();

       // $produtos ->update($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id_produto)
    {
        $produto = Produto::find($id_produto);
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