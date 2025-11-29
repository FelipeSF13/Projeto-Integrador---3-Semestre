<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Pedidos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.header')

    <main class="container">
        <section class="admin-section">
            <div class="admin-card">
                <h2>Pedidos</h2>
                <p class="subtitle">Lista de pedidos recentes</p>

                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Valor</th>
                                <th>Status</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1023</td>
                                <td>Ana Silva</td>
                                <td>R$ 3.200,00</td>
                                <td><span class="badge" style="background:var(--vivara-gold);color:#fff;padding:4px 8px;border-radius:4px;">Pago</span></td>
                                <td>25/11/2025</td>
                                <td><a href="{{ route('adm-order-detail', ['id' => 1023]) }}" class="btn btn-outline">Ver</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
