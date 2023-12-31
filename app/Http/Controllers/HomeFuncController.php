<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\EnderecoUsuario;
use App\Models\MetodoPagamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Produto;

class HomeFuncController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $produtos = Produto::all();
        return view('telas_funcionario.tela_inicial', compact('user', 'produtos'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('home.usuario', compact('user'));
    }

    public function update(Request $request)
    {
        $userId = session('id_usuario');
        $user = User::findOrFail($userId);

        $user->name = $request->input("name");
        $user->telefone = $request->input("telefone");
        $user->email = $request->input("email");
        $user->cpf = $request->input("cpf");

        $user->save();

        return redirect()->route('home.usuario');
    }

    public function delete(User $user)
    {

        $user->delete();

        return redirect()->route('login.index');
    }

    public function carrinho()
    {
        $user = Auth::user();
        return view('home.carrinho', compact('user'));
    }

    public function pedidos()
    {
        $user = Auth::user();
        return view('home.pedidos', compact('user'));
    }

    public function enderecos()
    {
        $user = Auth::user();
        $enderecos = EnderecoUsuario::where('id_usuario', $user->id)->get();
        return view('home.enderecos.enderecos', compact('enderecos'));
    }

    public function formasPagamento()
    {
        $user = Auth::user();
        $formasPagamento = MetodoPagamento::where('id_usuario', $user->id)->get();

        return view('home.formasPagamento.formasPagamento', compact('formasPagamento'));
    }


    public function produto()
    {
        $produtos = Produto::all();
        return view('home.produto', compact('produtos'));
    }

    public function aplicarCupom(Request $request)
    {

        $request->validate([
            'cupom' => [
                'required', Rule::exists(Cupom::class, 'nome'),
            ],
        ]);

        return redirect()->back()->with('success', 'Cupom Válido!');
    }
}
