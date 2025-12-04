<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/feminino', function () {
    return view('feminino');
})->name('feminino');

Route::get('/masculino', function () {
    return view('masculino');
})->name('masculino');

Route::get('/produto/{id?}', function () {
    return view('detalhe-produto');
})->name('produto');

Route::get('/pagamento', function () {
    return view('pagamento');
})->name('pagamento');

Route::get('/carrinho', function () {
    return view('carrinho');
})->name('carrinho');

Route::get('/admin/produtos', function () {
    return view('admin_produtos');
})->name('admin.produtos');

Route::get('/admin/usuarios', function () {
    return view('admin_usuarios');
})->name('admin.usuarios');

Route::get('/admin/dashboard', function () {
    return view('admin_dashboard');
})->name('admin.dashboard');

Route::get('/admin/cadastrar-produto', function () {
    return view('admin_cadastrar_produto');
})->name('admin.cadastrar-produto');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');