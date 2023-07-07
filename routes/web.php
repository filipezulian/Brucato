<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CupomController;
use App\Http\Controllers\EnderecoUsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetodoPagamentoController;
use App\Http\Controllers\TransportadoraController;
use App\Models\EnderecoUsuario;
use App\Models\MetodoPagamento;
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

//ROTAS DE CLIENTE ------ FORMAS DE PAGAMENTO
Route::controller(MetodoPagamentoController::class)->group(function () {
    Route::get('/formasPagamento', 'index')->name('formasPagamento.index');
    Route::post('/formasPagamento', 'store')->name('formasPagamento.store');
    Route::get('/formasPagamento/create', 'create')->name('formasPagamento.create');
    Route::get('/formasPagamento/edit/{formasPagamento}', 'edit')->name('formasPagamento.edit');
    Route::put('/formasPagamento/update/{formasPagamento}', 'update')->name('formasPagamento.update');
    Route::delete('/formasPagamento/delete/{formasPagamento}', 'delete')->name('formasPagamento.delete');
});

//ROTAS DE CLIENTE ------ EDITAR ENDERECOS
Route::controller(EnderecoUsuarioController::class)->group(function () {
    Route::get('/enderecos', 'index')->name('enderecos.index');
    Route::post('/enderecos', 'store')->name('enderecos.store');
    Route::get('/enderecos/create', 'create')->name('enderecos.create');
    Route::get('/enderecos/edit/{enderecos}', 'edit')->name('enderecos.edit');
    Route::put('/enderecos/update/{enderecos}', 'update')->name('enderecos.update');
    Route::delete('/enderecos/delete/{enderecos}', 'delete')->name('enderecos.delete');
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
    Route::get('/produto', 'produto')->name('home.produto');
});


//pagina cadastro 
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
Route::get('/prodfunc', [App\Http\Controllers\ProdutoController::class, 'index'])->name('produto.index');
Route::get('/prodfunc/create', [App\Http\Controllers\ProdutoController::class, 'create'])->name('produto.create');
Route::post('/prodfuncs', [App\Http\Controllers\ProdutoController::class, 'store'])->name('produto.store');
Route::delete('/prodfunc/delete/{id_produto}', [App\Http\Controllers\ProdutoController::class, 'delete'])->name('produto.delete');
Route::get('/prodfunc/edit/{id_produto}', [App\Http\Controllers\ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/prodfunc/update/{id_produto}', [App\Http\Controllers\ProdutoController::class, 'update'])->name('produto.update');
Route::get('/prodfunc/show/{id_produto}', [App\Http\Controllers\ProdutoController::class, 'show'])->name('produto.show');


//ROTAS DE FUNCIONARIO ----- ESTOQUE
Route::get('/estfunc', [App\Http\Controllers\EstoqueController::class, 'index'])->name('estoque.index');
Route::get('/estfunc/create', [App\Http\Controllers\EstoqueController::class, 'create'])->name('estoque.create');
Route::post('/estfuncs', [App\Http\Controllers\EstoqueController::class, 'store'])->name('estoque.store');
Route::delete('/estfunc/delete/{id_estoque}', [App\Http\Controllers\EstoqueController::class, 'delete'])->name('estoque.delete');
Route::get('/estfunc/edit/{id_estoque}', [App\Http\Controllers\EstoqueController::class, 'edit'])->name('estoque.edit');
Route::put('/estfunc/update/{id_estoque}', [App\Http\Controllers\EstoqueController::class, 'update'])->name('estoque.update');
Route::get('/estfunc/show/{id_estoque}', [App\Http\Controllers\EstoqueController::class, 'show'])->name('estoque.show');

Route::get('estfunc/pdf', [App\Http\Controllers\EstoqueController::class, 'pdf'])->name('estoque.pdf');

//ROTAS DE FUNCIONARIO ------ CLIENTES
Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');

//ROTAS DE FUNCIONARIO ------ PEDIDOS
Route::get('/pedido', [App\Http\Controllers\PedidoController::class, 'index'])->name('pedido.index');

Route::get('/homeFunc', [App\Http\Controllers\HomeFuncController::class, 'index'])->name('tela_inicial.index');