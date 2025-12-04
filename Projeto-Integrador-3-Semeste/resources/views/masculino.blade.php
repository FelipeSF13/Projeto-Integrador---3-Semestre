<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masculino - Elegance Joias </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>

    <div class="top-bar">
        <span>Faça login e ganhe 20% em sua primeira compra. <a href="{{ route('cadastro') }}">Registre-se</a></span>
        <button class="close-btn" title="Fechar">✕</button>
    </div>
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
        <nav class="breadcrumb">
            <a href="{{ route('index') }}">Página Inicial</a>
            <span>&gt;</span>
            <span class="current">Masculino</span>
        </nav>

        <div class="listing-layout">
            <aside class="listing-sidebar">
                <div class="filter-group">
                    <h3 class="filter-title">Filtros</h3>
                    <div class="filter-options">
                        <a href="#" class="filter-item"><span>Relógios</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item"><span>Pulseira</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item"><span>Corrente</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item"><span>Anel</span> <span>&gt;</span></a>
                    </div>
                </div>

               <div class="filter-group">
                    <h3 class="filter-title">Preço</h3>
                    <input type="range" class="price-slider" id="price-slider-input" min="0" max="10000" value="10000" step="100"> 
                    <div class="price-range">
                        <span>R$0</span> 
                        <span id="price-slider-value">R$10000</span> 
                    </div>
                </div>
                
                <div class="filter-group">
                    <h3 class="filter-title">Cor</h3>
                    <div class="color-filter-list">
                        <span class="color-swatch" style="background-color: #fde047;" title="Ouro"></span>
                        <span class="color-swatch" style="background-color: #d1d5db;" title="Prata"></span>
                    </div>
                </div>

                <button class="btn btn-dark" style="width: 100%;">Aplicar Filtros</button>
            </aside>

            <section class="listing-products">
                <div class="listing-header">
                    <h1>Masculino</h1>
                    <div class="sort-by">
                        <span>Filtrado 1-10 a 100 Produtos</span>
                        <span>Por: <strong>Mais popular &vee;</strong></span>
                    </div>
                </div>

                <div class="product-grid listing">
                    <script>
                        const assetBase = "{{ asset('') }}/";
                        const listingProducts = [
                            { name: 'Brinco de Ouro 10k', price: '2.125,50', original: '2.632,50', rating: '5.0/5', img: `${assetBase}img/relogio1.png` },
                            { name: 'Anel de Ouro 20k', price: '1.545,55', rating: '4.0/5', img: `${assetBase}img/relogio1.png` },
                            { name: 'Colar de Ouro 85k', price: '8.000,50', rating: '3.8/5', img: `${assetBase}img/relogio1.png` },
                        ];
                        for (let i = 0; i < 3; i++) {
                            listingProducts.forEach(p => {
                                document.write(`
                                    <a href="{{ route('produto', ['id' => 1]) }}" class="product-card">
                                        <img src="${p.img}" alt="${p.name}">
                                        <h3>${p.name}</h3>
                                        <p class="price">
                                            <span class="sale">R$${p.price}</span>
                                            ${p.original ? `<span class="original">R$${p.original}</span>` : ''}
                                        </p>
                                    </a>
                                `);
                            });
                        }
                    </script>
                </div>

                <nav class="pagination">
                    <a href="#" class="page-link">&larr; Voltar</a>
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">...</a>
                    <a href="#" class="page-link">10</a>
                    <a href="#" class="page-link">Próximo &rarr;</a>
                </nav>
            </section>
        </div>
    </main>

    <section class="contact-section"><div class="content"><h2>Entre em contato com a gente caso tenha alguma dúvida ou sugestão! :) <h2>

        <form action="#" method="POST"><div class="input-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        <input type="email" placeholder="Digite seu email" class="input-field">
    </div>

    <div class="input-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
        <input type="text" placeholder="Conte para gente sua questão!" class="input-field">
    </div>
        <button type="submit" class="btn-submit">Enviar</button>
    </form>
</div>
</section>
    
    <footer class="container main-footer">
        <div class="footer-grid">
            <div class="footer-about">
                <div class="logo">Elegance Joias</div> <p>Joias para todos os momentos.</p>
                <div class="social-icons">
                    <a href="#" title="Twitter"><svg>...</svg></a>
                    <a href="#" title="Instagram"><svg>...</svg></a>
                    <a href="#" title="Facebook"><svg>...</svg></a>
                </div>
            </div>
            <div class="footer-links">
                <h3>SOBRE</h3>
                <ul>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Nosso trabalho</a></li>
                    <li><a href="#">Trabalhe conosco</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>AJUDA</h3>
                <ul>
                    <li><a href="#">Suporte</a></li>
                    <li><a href="#">Calcular Frete</a></li>
                    <li><a href="#">Termos e Condições</a></li>
                    <li><a href="#">Políticas e Privacidade</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>FAQ</h3>
                <ul>
                    <li><a href="#">Conta</a></li>
                    <li><a href="#">Reclamações</a></li>
                    <li><a href="#">Pagamento</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Elegance Joias © 2000-2025 - Todos direitos reservados</p> <div class="footer-payment-icons">
                <img src="{{ asset('img/bandeiras.jpg') }}" height="35" width="300" alt="Visa Electron" title="Visa Electron">
                
        </div>
    </footer>
    

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>