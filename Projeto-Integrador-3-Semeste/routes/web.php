<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/feminino', function () {
    return view('feminino');
});
Route::get('/masculino', function () {
    return view('masculino');
});
Route::get('/pagamento', function () {
    return view('pagamento');
});
Route::get('produto', function () {
    return view('detalhe-produto');
});
Route::get('/carrinho', function () {
    return view('carrinho');
});
Route::get('/adm-produto', function () {
    return view('admin_produtos');
});
Route::get('/adm-usuarios', function () {
    return view('admin_usuarios');
});
Route::get('/adm-dashboard', function () {
    return view('admin_dashboard');
});
Route::get('/adm-cadastro', function () {
    return view('admin_cadastrar_produto');
});