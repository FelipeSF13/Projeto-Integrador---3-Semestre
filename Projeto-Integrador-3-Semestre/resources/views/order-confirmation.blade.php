<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Confirmado - Elegance Joias</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')

    <main class="container">
        <section class="admin-section">
            <div class="admin-card">
                <h2>Pedido confirmado</h2>
                <p class="subtitle">Obrigado pela sua compra! Seu pedido foi recebido com sucesso.</p>

                <div class="confirmation">
                    <p><strong>Número do pedido:</strong> #{{ time() }}</p>
                    <p>Enviaremos um e-mail com os detalhes e o código de rastreio quando o pedido for expedido.</p>
                    <a href="{{ route('index') }}" class="btn btn-outline">Continuar comprando</a>
                    <a href="{{ route('checkout') }}" class="btn btn-dark">Ver detalhes do pedido</a>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
