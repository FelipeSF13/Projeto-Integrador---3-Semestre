<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Elegance Joias</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/atomic/molecules/_brands-scroll.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    </head>
<body>
    @include('partials.header')

    <main class="container">
        <section class="checkout-card admin-section">
            <div class="admin-card">
                <h2>Pagamento</h2>
                <p class="subtitle">Revise seus itens e finalize o pagamento com segurança.</p>

                <div class="checkout-grid">
                    <div class="checkout-left">
                        <h3>Endereço de entrega</h3>
                        <form class="checkout-form">
                            <label>Nome completo</label>
                            <input type="text" class="input-field" placeholder="Nome">
                            <label>Endereço</label>
                            <input type="text" class="input-field" placeholder="Rua, número">
                            <label>CEP</label>
                            <input type="text" class="input-field" placeholder="00000-000">
                        </form>

                        <h3>Método de pagamento</h3>
                        <div class="payment-methods">
                            <button class="btn btn-dark">Cartão de Crédito</button>
                            <button class="btn btn-outline">Boleto</button>
                        </div>
                    </div>

                    <aside class="checkout-right">
                        <h3>Resumo do pedido</h3>
                        <div class="order-summary">
                            <div class="summary-item"><span>Subtotal</span><span>R$ 3.200,00</span></div>
                            <div class="summary-item"><span>Frete</span><span>R$ 18,90</span></div>
                            <div class="summary-total"><span>Total</span><strong>R$ 3.218,90</strong></div>
                        </div>
                        <a href="{{ route('order.confirmation') }}" class="btn btn-dark">Finalizar pagamento</a>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
