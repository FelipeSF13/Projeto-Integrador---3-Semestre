<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Detalhe do Pedido</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')

    <main class="container">
        <section class="admin-section">
            <div class="admin-card">
                <h2>Pedido #{{ $id }}</h2>
                <p class="subtitle">Detalhes do pedido e ações administrativas</p>

                <div class="order-detail">
                    <h3>Itens</h3>
                    <ul>
                        <li>Anel Solitário — R$ 3.200,00 x1</li>
                    </ul>

                    <h3>Dados do Cliente</h3>
                    <p>Ana Silva — ana@example.com</p>

                    <h3>Status</h3>
                    <p><strong>Pago</strong></p>

                    <div class="admin-actions">
                        <button class="btn btn-outline">Marcar como enviado</button>
                        <button class="btn btn-dark">Gerar etiqueta</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
