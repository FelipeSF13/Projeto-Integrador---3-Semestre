<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="admin-body-bg">

    <header class="container main-header">
        <a href="{{ route('index') }}" class="logo">Elegance Joias</a>
        <nav>
            <a href="{{ route('index') }}">Página Inicial</a>
            <a href="{{ route('feminino') }}">Feminino</a>
            <a href="{{ route('masculino') }}">Masculino</a>
        </nav>
        <div class="header-icons">
            <div class="search-container">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" placeholder="Pesquisar produtos" class="search-input">
            </div>
            <a href="{{ route('carrinho') }}" class="icon-link cart-icon-link" title="Carrinho">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <span class="cart-item-count">0</span>
            </a>
            <a href="{{ route('login') }}" class="icon-link" title="Login">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            </a>
        </div>
    </header>

    <main class="container">
        <section class="admin-section">
            <div class="admin-card">
                <h2>Painel Principal</h2>
                <p class="subtitle">Selecione uma opção abaixo para gerenciar sua loja.</p>

                <div class="dashboard-navigation">

                    <a href="{{ route('adm-produto') }}" class="dashboard-link-card">
                        <i class="fas fa-boxes fa-2x"></i> <span>Produtos em Estoque</span>
                        <p>Visualizar e gerenciar produtos existentes.</p>
                    </a>

                    <a href="{{ route('adm-usuarios') }}" class="dashboard-link-card">
                        <i class="fas fa-users fa-2x"></i> <span>Usuários Cadastrados</span>
                        <p>Verificar e administrar contas de usuários.</p>
                    </a>

                    <a href="{{ route('adm-cadastro') }}" class="dashboard-link-card">
                         <i class="fas fa-plus-circle fa-2x"></i> <span>Cadastrar Novo Produto</span>
                        <p>Adicionar novos itens ao catálogo da loja.</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="container main-footer">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="logo">Elegance Joias</div>
                <p>Joias para todos os momentos.</p>
                <div class="social-icons">
                    <a href="#" title="Twitter">Twitter</a>
                    <a href="#" title="Instagram">Instagram</a>
                </div>
            </div>
            <div class="footer-links">
                <h3>SOBRE</h3>
                <ul>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Nosso trabalho</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>AJUDA</h3>
                <ul>
                    <li><a href="#">Suporte</a></li>
                    <li><a href="#">Calcular Frete</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Elegance Joias © 2000-2025 - Todos direitos reservados</p>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
