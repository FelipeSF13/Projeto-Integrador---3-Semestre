<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - Joalheria</title>
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>

    <div class="top-bar"><span>Faça login e ganhe 20% em sua primeira compra. <a href="cadastro.html">Registre-se</a></span><button class="close-btn" title="Fechar">✕</button></div>
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
            <a href="#">Anel de...</a>
             <span>&gt;</span>
            <a href="carrinho.html">Carrinho</a>
             <span>&gt;</span>
            <span class="current">Pagamento</span>
        </nav>

        <div class="checkout-layout">
            
            <section class="checkout-summary">
                <h1 class="checkout-title">Resumo</h1>

                <div class="payment-modal-overlay" id="payment-overlay"></div>
                <div class="payment-modal" id="payment-modal">
                    <svg class="modal-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3>Pagamento confirmado!</h3>
                </div>
                <div class="cart-items">
                     <article class="cart-item" data-price="145.50"><div class="item-details"><img src="img/anel1.png" 
                       alt="Colar de Ouro"><div><h2>Colar de Ouro</h2><p>Tamanho: 45 cm</p><p>Cor: Ouro</p><p class="price">R$145,50</p></div></div><div class="item-controls"><div class="quantity-selector"><button class="decrease-qty">-</button><span class="quantity-value">1</span><button class="increase-qty">+</button></div><button class="delete-item-btn" title="Remover"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg></button></div></article>

                     <article class="cart-item" data-price="180.45"><div class="item-details"><img src="img/anel2.png" 
                        alt="Colar de Ouro"><div><h2>Colar de Ouro</h2><p>Tamanho: 45 cm</p><p>Cor: Ouro</p><p class="price">R$180,45</p></div></div><div class="item-controls"><div class="quantity-selector"><button class="decrease-qty">-</button><span class="quantity-value">1</span><button class="increase-qty">+</button></div><button class="delete-item-btn" title="Remover"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg></button></div></article>

                     <article class="cart-item" data-price="240.25"><div class="item-details"><img src="img/colar2.png" 
                        alt="Colar de Ouro"><div><h2>Colar de Ouro</h2><p>Tamanho: 40 cm</p><p>Cor: Ouro</p><p class="price">R$240,25</p></div></div><div class="item-controls"><div class="quantity-selector"><button class="decrease-qty">-</button><span class="quantity-value">1</span><button class="increase-qty">+</button></div><button class="delete-item-btn" title="Remover"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg></button></div></article>
                </div>
            </section>
            
            <aside class="checkout-payment">
                <a href="carrinho.html" class="back-link">&larr; Voltar </a>
                <h1 class="checkout-title payment">Pagamento</h1>

                <div class="payment-item-summary">
                    <span>Item</span>
                    <span>Colar de Ouro</span>
                    <span>x5</span> </div>

                <div class="cart-summary payment-page">
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="subtotal" class="value">R$565,89</span>
                    </div>
                    <div class="summary-row">
                        <span id="discount-label">Desconto (-20%)</span> 
                        <span id="discount" class="discount">-R$113,55</span>
                    </div>
                    <div class="summary-row">
                        <span>Frete</span>
                        <span id="shipping" class="value">R$15,99</span>
                    </div>
                    <hr>
                    <div class="summary-row total-row">
                        <span>Total</span>
                        <span id="total">R$4.567,85</span>
                    </div>
                </div>

                <div class="payment-timer-container">
                    <span>Tempo restante para concluir:</span>
                    <span id="payment-timer" class="payment-timer-time">10:00</span>
                </div>
                <h3 class="payment-methods-title">Forma de pagamento</h3>
                <form id="payment-form">
                    <div class="payment-methods">
                        <div class="payment-option">
                            <input type="radio" name="paymentMethod" value="visa-1234" id="visa-1234" checked>
                            <label for="visa-1234" class="payment-method">
                                <span>VISA</span>
                                <span>************2109</span>
                            </label>
                        </div>

                        <div class="payment-option">
                            <input type="radio" name="paymentMethod" value="paypal-5678" id="paypal-5678">
                            <label for="paypal-5678" class="payment-method">
                                <span>PayPal</span>
                                <span>************2109</span>
                            </label>
                        </div>

                        <div class="payment-option">
                            <input type="radio" name="paymentMethod" value="pix" id="pix">
                            <label for="pix" class="payment-method pix-option">
                                <span>PIX</span>
                                </label>
                        </div>

                        <button type="button" class="payment-method add-card-btn" id="add-card-btn">
                            <span>+</span>
                            <span>Cadastrar novo cartão</span>
                        </button>

                    </div>

                    <button type="submit" class="btn btn-dark" id="continue-btn" style="width: 100%; background-color: var(--color-primary); color: var(--color-dark);">Continue</button>
                </form>

                

            </aside>
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
                <img src="img/bandeiras.jpg" height="35" width="300" alt="Visa Electron" title="Visa Electron">
                
        </div>
    </footer>
    
    <script src="js/script.js"></script>
</body>
</html>