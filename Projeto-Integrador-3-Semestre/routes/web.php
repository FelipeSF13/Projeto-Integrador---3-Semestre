<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Central product catalogue (example data). Substitua por Eloquent/DB em produção.
$catalog = [
    ['id' => 1, 'name' => 'Brinco de Ouro 10k', 'price' => 2125.50, 'priceText' => '2.125,50', 'original' => 2632.50, 'rating' => 5.0, 'img' => 'img/anel1.png', 'category' => 'anel', 'color' => 'ouro', 'gender' => 'feminino'],
    ['id' => 2, 'name' => 'Anel de Ouro 20k', 'price' => 1545.55, 'priceText' => '1.545,55', 'original' => null, 'rating' => 4.0, 'img' => 'img/anel2.png', 'category' => 'anel', 'color' => 'ouro', 'gender' => 'feminino'],
    ['id' => 3, 'name' => 'Colar Elegance', 'price' => 8000.50, 'priceText' => '8.000,50', 'original' => null, 'rating' => 3.8, 'img' => 'img/colar1.png', 'category' => 'colar', 'color' => 'prata', 'gender' => 'feminino'],
    ['id' => 4, 'name' => 'Pulseira Elegância', 'price' => 850.00, 'priceText' => '850,00', 'original' => null, 'rating' => 4.3, 'img' => 'img/colar2.png', 'category' => 'pulseira', 'color' => 'prata', 'gender' => 'feminino'],
    ['id' => 5, 'name' => 'Relógio Lux', 'price' => 4500.00, 'priceText' => '4.500,00', 'original' => 5000.00, 'rating' => 4.8, 'img' => 'img/relogio1.png', 'category' => 'relogios', 'color' => 'ouro', 'gender' => 'unisex'],
    ['id' => 6, 'name' => 'Pulseira de Couro', 'price' => 420.00, 'priceText' => '420,00', 'original' => null, 'rating' => 4.1, 'img' => 'img/colar2.png', 'category' => 'pulseira', 'color' => 'prata', 'gender' => 'masculino'],
    ['id' => 7, 'name' => 'Anel Masculino', 'price' => 1200.00, 'priceText' => '1.200,00', 'original' => null, 'rating' => 4.4, 'img' => 'img/anel2.png', 'category' => 'anel', 'color' => 'ouro', 'gender' => 'masculino'],
    ['id' => 8, 'name' => 'Colar Dourado', 'price' => 2300.00, 'priceText' => '2.300,00', 'original' => null, 'rating' => 4.6, 'img' => 'img/colar2.png', 'category' => 'colar', 'color' => 'ouro', 'gender' => 'unisex'],
    ['id' => 9, 'name' => 'Anel Verde Esmeralda', 'price' => 5350.55, 'priceText' => '5.350,55', 'original' => 8500.52, 'rating' => 4.5, 'img' => 'img/anelverde.webp', 'category' => 'anel', 'color' => 'ouro', 'gender' => 'feminino'],
    ['id' => 10, 'name' => 'Brinco Minimal', 'price' => 320.00, 'priceText' => '320,00', 'original' => null, 'rating' => 4.0, 'img' => 'img/anel1.png', 'category' => 'brinco', 'color' => 'prata', 'gender' => 'feminino'],
];

//Caso queiram criar mais rotas, podem fazer aqui abaixo com o seguinte padrão:

// Route::get('/nome-da-rota(visivel no navegador)', function () {
//     return view('nome do index.blade.php SEM o .blade.php');
// })->name('nome-da-rota');

Route::get('/', function () use ($catalog) {
    // Show a curated selection on the home page
    $products = array_slice($catalog, 0, 6);
    return view('index', ['products' => $products]);
})->name('index');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/login', function () {
   return view('login');
})->name('login');

Route::get('/feminino', function () use ($catalog) {
    // Feminino: products marked as 'feminino' or 'unisex'
    $products = array_values(array_filter($catalog, function($p){
        return in_array($p['gender'], ['feminino','unisex']);
    }));
    return view('feminino', ['products' => $products]);
})->name('feminino');

Route::get('/masculino', function () use ($catalog) {
    // Masculino: products marked as 'masculino' or 'unisex'
    $products = array_values(array_filter($catalog, function($p){
        return in_array($p['gender'], ['masculino','unisex']);
    }));
    return view('masculino', ['products' => $products]);
})->name('masculino');

Route::get('/pagamento', function () {
    return view('pagamento');
})->name('pagamento');

Route::get('/detalhe-produto/{id?}', function ($id = null) use ($catalog) {
    $product = null;
    foreach ($catalog as $p) {
        if ($p['id'] == $id) { $product = $p; break; }
    }
    $related = array_values(array_filter($catalog, function($p) use ($id){ return $p['id'] != $id; }));

    return view('detalhe-produto', ['product' => $product, 'related' => $related]);
})->name('detalhe-produto');

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

// Handle product creation from admin panel (simple placeholder handler)
Route::post('/adm-cadastro', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|string',
        'stock' => 'nullable|integer',
        'category' => 'nullable|string',
        'image' => 'nullable|file|image|max:5120',
    ]);

    // NOTE: This project currently doesn't persist products.
    // In a real app, you would save to the database here.

    return back()->with('success', 'Produto cadastrado com sucesso (simulado).');
})->name('adm-cadastro.save');

// Contact form POST handler (fallback for non-JS users)
Route::post('/contact', function (Request $request) {
    // You can validate and save the message here. For now, just flash a message and return back.
    $request->validate([
        'contact-email' => 'required|email',
        'contact-message' => 'required|string',
    ]);
    // In a real app, persist to DB or send email. We'll flash a session message and redirect back.
    return back()->with('contact_status', 'Obrigado! Sua mensagem foi recebida.');
})->name('contact.submit');

// Checkout and order pages
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/order-confirmation', function () {
    return view('order-confirmation');
})->name('order.confirmation');

// Admin: orders and order detail
Route::get('/adm-pedidos', function () {
    return view('admin_orders');
})->name('adm-orders');

Route::get('/adm-pedido/{id}', function ($id) {
    return view('admin_order_detail', ['id' => $id]);
})->name('adm-order-detail');

// Admin: product edit (form)
Route::get('/adm-produto/{id}/editar', function ($id) {
    return view('admin_product_edit', ['id' => $id]);
})->name('adm-prod-edit');

