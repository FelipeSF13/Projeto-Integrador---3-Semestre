<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/feminino', [ProductController::class, 'feminino'])->name('feminino');

Route::get('/masculino', [ProductController::class, 'masculino'])->name('masculino');

Route::get('/produto/{id?}', [ProductController::class, 'show'])->name('produto');

Route::get('/pagamento', function () {
    return view('pagamento');
})->name('pagamento');

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');