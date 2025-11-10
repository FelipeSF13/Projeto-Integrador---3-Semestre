<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - Joalheria</title>
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    
    <div class="top-bar">
        <span>Faça login e ganhe 20% em sua primeira compra. <a href="cadastro.html">Registre-se</a></span>
        <button class="close-btn" title="Fechar">✕</button></div>
        
        <header class="container main-header">
            <a href="index.html" class="logo">Elegance Joias</a> <nav>
                <a href="index.html">Página Inicial</a>
                <a href="feminino.html">Feminino</a>
                <a href="masculino.html">Masculino</a>
            </nav>
    
            <div class="header-icons">
                <div class="search-container">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Pesquisar produtos" class="search-input">
                </div>
                <a href="carrinho.html" class="icon-link cart-icon-link" title="Carrinho">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    <span class="cart-item-count">0</span>
                </a>
                <a href="login.html" class="icon-link" title="Login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </a>
            </div>
        </header>

    <main class="container">
        <nav class="breadcrumb">
            <a href="index.html">Página Inicial</a>
            <span>&gt;</span>
            <a href="#">Feminino</a>
            <span>&gt;</span>
            <span class="current"> Anel de Ouro - Pingente Verde Esmeralda </span>
        </nav>

        <section class="product-details-layout">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="img/anelverde.webp" alt="Produto Principal">
                </div>
                <div class="thumbnail-images">
                    <img src='img/anelverde.webp' alt="Thumbnail 1">
                    <img src='img/anel1.png' alt="Thumbnail 2">
                    <img src='img/anelverde.webp' alt="Thumbnail 3">
                </div>
            </div>
            <div class="product-info">
                <h1>Colar Preta - Pingentes Vermelhos</h1>
                <div class="rating-price">
                    <div class="rating">
                        <span>4.5/5</span>
                    </div>
                    <p class="info-price">R$5.350,55 <span class="original">R$8.500,52</span></p>
                </div>
                <p class="description">
                    Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <div class="color-selector">
                    <span class="color-swatch active" style="background-color: #d1d5db;" title="Prata"></span>
                    <span class="color-swatch" style="background-color: #fde047;" title="Ouro"></span>
                </div>
                <div class="controls">
                    <div class="quantity-selector">
                        <button>-</button>
                        <span class="quantity-value">1</span>
                        <button>+</button>
                    </div>
                    <a href="carrinho.html" class="btn btn-dark">Adicionar ao carrinho</a>
                </div>
            </div>
        </section>

        <section class="product-tabs">
            <nav class="tabs-nav">
                <span class="tab-link" data-tab="detalhes">Detalhes</span>
                <span class="tab-link active" data-tab="comentarios">Comentários (183)</span>
                <span class="tab-link" data-tab="faqs">FAQs</span>
            </nav>
            <div class="tabs-content">
                <div class="tab-pane" id="detalhes">
                    <p>Aqui vão os detalhes técnicos do produto, como material, peso, dimensões, etc.</p>
                </div>
                <div class="tab-pane active" id="comentarios">
                    <div class="comments-header">
                        <div class="filters">
                            <button class="filter-btn">Filtrar</button>
                            <button class="filter-btn">Mais recentes</button>
                        </div>
                        <button class="btn btn-dark" style="border-radius: 5px; padding: 10px 20px;">Deixar um comentário</button>
                    </div>
                    <div class="comments-grid">
                        <div class="comment-card">
                            <div class="user-info">
                                <div class="user"><span>Samantha O.</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg></div>
                                <span class="options">...</span>
                            </div>
                            <div class="rating"><script>for(let i=0; i<5; i++) document.write('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>');</script></div>
                            <p class="comment-body">"Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s"</p>
                            <p class="comment-date">Posted on August 19, 2023</p>
                        </div>
                        </div>
                    <div class="view-more-comments">
                        <a href="#" style="text-decoration: underline; font-weight: 500;">Ver mais</a>
                    </div>
                </div>
                <div class="tab-pane" id="faqs">
                    <p>Aqui vão as perguntas e respostas frequentes sobre o produto.</p>
                </div>
            </div>
        </section>

        <section class="container related-products-section"> <h2 class="section-title">Destaques para você</h2>
            <div class="product-grid" id="related-products-grid"> 
                </div>
        </section>

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
                <img src="img/bandeiras.jpg" height="35" width="300" alt="Visa Electron" title="Visa Electron">
                
        </div>
    </footer>
    

    <script src="js/script.js"></script>
</body>
</html>