<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ], [
            'email.required' => 'O campo "E-mail" não pode estar vazio!',
            'email.email' => 'O campo "E-mail" tem que ter um E-mail valido!',
            'password.required' => 'O campo "Senha" não pode estar vazio!',
            'password.min' => 'O campo "Senha" tem que ter no mínimo :min caracteres'
        ]);
        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);
        if (!$authenticated) {
            return redirect()->route('login.index')->withErrors(['error' => '"E-mail" ou "Senha" estão incorretos']);
        }

        $user = Auth::user();

        if ($user->id_funcionario) {
            return redirect()->route('produto.index');
        }

        session(['id_usuario' => $user->id]);
        return redirect()->route('home.index');
    }

    public function destroy()
    {
        var_dump('logout');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'cpf' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['cpf' => $request->cpf, 'password' => $request->password])) {
            dd('logou');
        } else {
            dd('nao logou');
        }
    }
}
