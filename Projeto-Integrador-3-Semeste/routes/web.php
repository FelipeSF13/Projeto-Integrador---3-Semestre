<?php

use Illuminate\Support\Facades\Route;

//Caso queiram criar mais rotas, podem fazer aqui abaixo com o seguinte padrão:

// Route::get('/nome-da-rota(visivel no navegador)', function () {
//     return view('nome do index.blade.php SEM o .blade.php');
// })->name('nome-da-rota');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/login', function () {
   return view('login');
})->name('login');

Route::get('/feminino', function () {
return view('feminino');
})->name('feminino');

Route::get('/masculino', function () {
    return view('masculino');
})->name('masculino');

Route::get('/pagamento', function () {
    return view('pagamento');
})->name('pagamento');

Route::get('produto', function () {
    return view('detalhe-produto');
})->name('produto');

Route::get('/carrinho', function () {
    return view('carrinho');
})->name('carrinho');

Route::get('/adm-produto', function () {
    return view('admin_produtos');
})->name('adm-produto');

Route::get('/adm-usuarios', function () {
    return view('admin_usuarios');
})->name('adm-usuarios');

Route::get('/adm-dashboard', function () {
    return view('admin_dashboard');
})->name('adm-dashboard');

Route::get('/adm-cadastro', function () {
    return view('admin_cadastrar_produto');
})->name('adm-cadastro');