<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Produtos em Estoque</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                <h2>Em estoque</h2>
                <p class="subtitle">Produtos em Estoque</p>

                <nav class="admin-tabs">
                    <a href="{{ route('adm-produto') }}" class="active">Em estoque</a>
                    <a href="{{ route('adm-usuarios') }}">Usuários</a>
                    <a href="{{ route('adm-cadastro') }}">Cadastrar Produtos</a>
                </nav>

                <div class="admin-action-bar">
                    <button class="icon-button"><i class="far fa-calendar-alt"></i></button>
                    <button class="btn btn-secondary dropdown-toggle">Filtros <i class="fas fa-chevron-down"></i></button>
                </div>

                <div class="table-responsive">
                    <table class="admin-table">
                        <thead>
                            <tr>
                                <th><input type="checkbox" aria-label="Selecionar todos"></th>
                                <th>Produto</th>
                                <th>Categoria</th>
                                <th>ID</th>
                                <th>Preço</th>
                                <th>Data</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                <td><input type="checkbox" aria-label="Selecionar Relógio Rolex"></td>
                                <td>Relógio Rolex</td>
                                <td><span class="badge badge-relogio">Relógio</span></td>
                                <td>1</td>
                                <td>R$ 1.999,00</td>
                                <td>10.03.2025 <span class="time">11:16 AM</span></td>
                                <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" aria-label="Selecionar Corrente de Prata"></td>
                                <td>Corrente de Prata</td>
                                <td><span class="badge badge-corrente">Corrente</span></td>
                                <td>2</td>
                                <td>R$ 750</td>
                                <td>10.03.2025 <span class="time">11:16 AM</span></td>
                                <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" aria-label="Selecionar Bracelete de Prata"></td>
                                <td>Bracelete de Prata</td>
                                <td><span class="badge badge-pulseira">Pulseira</span></td>
                                <td>3</td>
                                <td>R$ 500</td>
                                <td>10.03.2025 <span class="time">11:16 AM</span></td>
                                <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" aria-label="Selecionar Relógio de Luxo"></td>
                                <td>Relógio de Luxo</td>
                                <td><span class="badge badge-relogio">Relógio</span></td>
                                <td>4</td>
                                <td>R$ 30.000</td>
                                <td>10.03.2025 <span class="time">11:16 AM</span></td>
                                <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" aria-label="Selecionar Brinco de Ouro"></td>
                                <td>Brinco de Ouro</td>
                                <td><span class="badge badge-brincos">Brincos</span></td>
                                <td>5</td>
                                <td>R$ 900</td>
                                <td>10.03.2025 <span class="time">11:16 AM</span></td>
                                <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" aria-label="Selecionar Anel de Esmeralda"></td>
                                <td>Anel de Esmeralda</td>
                                <td><span class="badge badge-anel">Anel</span></td>
                                <td>6</td>
                                <td>R$ 300</td>
                                <td>10.03.2025 <span class="time">11:16 AM</span></td>
                                <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                            </tr>
                             <tr>
                                <td><input type="checkbox" aria-label="Selecionar Colar de prata"></td>
                                <td>Colar de prata</td>
                                <td><span class="badge badge-colar">Colar</span></td>
                                <td>7</td>
                                <td>R$ 2.000</td>
                                <td>10.03.2025 <span class="time">11:16 AM</span></td>
                                <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
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
