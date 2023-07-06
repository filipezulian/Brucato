<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CupomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransportadoraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//PAGINA INICIAL, AONDE PODE SER FEITO LOGIN OU DIRECIONADO AO CADASTRO
Route::get('/login', function () {
    return view('auth.welcome');
});

Route::get('/produto', function () {
    return view('home.produto');
});

//ROTAS DE FUNCIONARIO ------ TRANSPORTADORAS
Route::controller(TransportadoraController::class)->group(function () {
    Route::get('/transportadora', 'index')->name('transportadora.index');
    Route::post('/transportadora', 'store')->name('transportadora.store');
    Route::get('/transportadora/create', 'create')->name('transportadora.create');
    Route::get('/transportadora/edit/{transportadora}', 'edit')->name('transportadora.edit');
    Route::put('/transportadora/update/{transportadora}', 'update')->name('transportadora.update');
    Route::delete('/transportadora/delete/{transportadora}', 'delete')->name('transportadora.delete');
});

//ROTAS DE FUNCIONARIO ------ CUPOM
Route::controller(CupomController::class)->group(function () {
    Route::get('/cupom', 'index')->name('cupom.index');
    Route::post('/cupom', 'store')->name('cupom.store');
    Route::get('/cupom/create', 'create')->name('cupom.create');
    Route::get('/cupom/edit/{cupom}', 'edit')->name('cupom.edit');
    Route::put('/cupom/update/{cupom}', 'update')->name('cupom.update');
    Route::delete('/cupom/delete/{cupom}', 'delete')->name('cupom.delete');
});

//pagina Usuario clientes
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home.index');
    Route::get('/usuario', 'edit')->name('home.usuario');
    Route::get('/pedidos', 'pedidos')->name('home.pedidos');
    Route::get('/enderecos', 'enderecos')->name('home.enderecos');
    Route::get('/formasPagamento', 'formasPagamento')->name('home.formasPagamento');
    Route::put('/usuario', 'update')->name('home.update.usuario');
    Route::delete('/usuario/delete/{user}', 'delete')->name('usuario.delete');
    Route::get('/carrinho', 'carrinho')->name('home.carrinho');
    Route::post('/carrinho/aplicar','aplicarCupom')->name('usuario.aplicarCupom');    
});


//pagina cadastro cliente
Route::controller(CadastroController::class)->group(function () {
    Route::get('/cadastro', 'index')->name('cadastro.index');
    Route::post('/cadastro', 'store')->name('cadastro.store');
});

//PAGINA INICIAL, AONDE PODE SER FEITO LOGIN OU DIRECIONADO AO CADASTRO
Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

//ROTAS DE FUNCIONARIO ----- PRODUTOS
Route::controller(ProdutoController::class)->group(function () {

    Route::get('/prodfunc', 'index')->name('produto.index');

    Route::get('/prodfunc/create', 'create')->name('produto.create');
    Route::post('/prodfunc', 'store')->name('produto.store');
    Route::get('/prodfunc/delete/{id}', 'delete')->name('produto.delete');
});

Route::get('/prodfunc/{id}/edit', [App\Http\Controllers\ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/prodfunc/update', [App\Http\Controllers\ProdutoController::class, 'update'])->name('produto.update');
Route::get('/prodfunc/search', [App\Http\Controllers\ProdutoController::class, 'search'])->name('produto.search');

//ROTAS DE FUNCIONARIO ------ CLIENTES
Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');

//ROTAS DE FUNCIONARIO ------ PEDIDOS
Route::get('/pedido', [App\Http\Controllers\PedidoController::class, 'index'])->name('pedido.index');