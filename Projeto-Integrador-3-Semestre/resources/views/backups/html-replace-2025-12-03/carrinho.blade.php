<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - Joalheria</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>
    <header class="container main-header">
        <a href="{{ route('index') }}" class="logo">Elegance Joias</a> <nav>
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
            <a href="{{ route('detalhe-produto') }}">Anel de Ouro - Pingente Verde Esmeralda</a>
             <span>&gt;</span>
            <span class="current">Carrinho</span>
        </nav>

        <h1 class="section-title" style="text-align: left; margin-top: 0; margin-bottom: var(--space-xl);">Seu carrinho</h1>

        <div class="cart-layout">
            <section class="cart-items">
                <article class="cart-item" data-price="145.50">
                    <div class="item-details">
                        <img src="{{ asset('img/anel1.png') }}" alt="Colar de Ouro">
                        <div>
                            <h2>Colar de Ouro</h2>
                            <p>Tamanho: 45 cm</p>
                            <p>Cor: Ouro</p>
                            <p class="price">R$145,50</p>
                        </div>
                    </div>
                    <div class="item-controls">
                        <div class="quantity-selector">
                            <button class="decrease-qty">-</button>
                            <span class="quantity-value">1</span>
                            <button class="increase-qty">+</button>
                        </div>
                        <button class="delete-item-btn" title="Remover">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg>
                        </button>
                    </div>
                </article>

                <article class="cart-item" data-price="180.45">
                    <div class="item-details">
                       <img src="{{ asset('img/anel2.png') }}" alt="Colar de Ouro">
                        <div>
                            <h2>Colar de Ouro</h2>
                            <p>Tamanho: 45 cm</p>
                            <p>Cor: Ouro</p>
                            <p class="price">R$180,45</p>
                        </div>
                    </div>
                     <div class="item-controls">
                        <div class="quantity-selector">
                            <button class="decrease-qty">-</button>
                            <span class="quantity-value">1</span>
                            <button class="increase-qty">+</button>
                        </div>
                        <button class="delete-item-btn" title="Remover">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg>
                        </button>
                    </div>
                </article>

                 <article class="cart-item" data-price="240.25">
                    <div class="item-details">
                        <img src="{{ asset('img/colar2.png') }}" alt="Colar de Ouro">
                        <div>
                            <h2>Colar de Ouro</h2>
                            <p>Tamanho: 40 cm</p>
                            <p>Cor: Ouro</p>
                            <p class="price">R$240,25</p>
                        </div>
                    </div>
                     <div class="item-controls">
                        <div class="quantity-selector">
                            <button class="decrease-qty">-</button>
                            <span class="quantity-value">1</span>
                            <button class="increase-qty">+</button>
                        </div>
                        <button class="delete-item-btn" title="Remover">
                             <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></svg>
                        </button>
                    </div>
                </article>
            </section>

            <aside class="cart-summary">
           <aside class="cart-summary">
            <h2>Resumo</h2>
            <div class="summary-row">
                <span>Subtotal</span>
                <span class="value" id="subtotal">R$ 0,00</span>
            </div>
            <div class="summary-row">
                <span id="discount-label">Desconto</span>
                <span class="value discount" id="discount">-R$ 0,00</span>
            </div>

            <hr>

            <div class="shipping-calculator">
                <label for="cep-input" class="shipping-label">Calcular Frete</label>
                <form class="cep-form" id="cep-form">
                    <input type="text" id="cep-input" placeholder="Digite seu CEP" maxlength="9">
                    <button type="submit" id="calculate-shipping-btn">Calcular</button>
                </form>

                <p class="shipping-message" id="shipping-message"></p>
            </div>

            <div class="summary-row shipping-row">
                <span>Frete</span>

                <span class="value" id="shipping-value">--</span>
            </div>
            <hr>

            <div class="summary-row total-row">
                <span>Total</span>
                <span class="value" id="total">R$ 0,00</span>
            </div>

            <form class="coupon-form" id="coupon-form">
                <input type="text" id="coupon-input" placeholder="Adicionar cupom">
                <button type="submit">Aplicar</button>
            </form>
            <p class="coupon-message" id="coupon-message"></p>

            <button class="btn btn-dark btn-checkout">Finalizar Compra &rarr;</button>
        </aside>
        </div>
    </main>

    <section class="contact-section"><div class="content"><h2>Entre em contato com a gente caso tenha alguma dúvida ou sugestão! :)</h2><form action="#" method="POST"><div class="input-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg><input type="email" placeholder="Digite seu email" class="input-field"></div><div class="input-wrapper"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg><input type="text" placeholder="Conte para gente sua questão!" class="input-field"></div><button type="submit" class="btn-submit">Enviar</button></form></div></section>

    <footer class="container main-footer"><div class="footer-grid"><div class="footer-about"><div class="logo">Joalheria</div><p>Joias para todos os momentos.</p><div class="social-icons"><a href="#" title="Twitter"><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M22.46 6c-.64.28-1.31.47-2.02.55.73-.44 1.29-1.13 1.55-1.94-.68.4-1.44.7-2.25.86-.64-.68-1.55-1.1-2.56-1.1-1.93 0-3.5 1.57-3.5 3.5 0 .27.03.54.09.79-2.91-.15-5.49-1.54-7.22-3.66-.3.52-.47 1.13-.47 1.77 0 1.21.62 2.28 1.55 2.91-.57-.02-1.11-.17-1.58-.44v.04c0 1.69 1.21 3.1 2.8 3.42-.29.08-.6.12-.92.12-.23 0-.45-.02-.67-.06.44 1.39 1.73 2.4 3.25 2.43-1.2.94-2.71 1.5-4.35 1.5-.28 0-.56-.02-.83-.05 1.55 1 3.39 1.58 5.36 1.58 6.43 0 9.94-5.32 9.94-9.94 0-.15 0-.3-.01-.45.68-.49 1.27-1.1 1.74-1.81z"></path></svg></a><a href="#" title="Instagram"><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.053 1.805.242 2.427.465.66.22 1.153.53 1.637.98.487.45.76.97.98 1.636.22 0 .62.41 1.17.46 1.81.05 1.06.06 1.36.07 1.02.04 1.37.06 3.8.06 3.58 0 3.2-.01 4.84-.07-1.17-.05-1.8-.24-2.43-.46-.66-.22-1.15-.53-1.63-.98-.48-.45-.76-.97-.98-1.63-.22-.62-.41-1.17-.46-1.81-.05-1.06-.06-1.36-.07-3.8 0-3.58.01-3.2.07-4.84.05-1.17.24-1.8.46-2.43.22-.66.53-1.15.98-1.63.45-.48.97-.76 1.63-.98.62-.22 1.17-.41 1.81-.46 1.06-.05 1.36-.06 3.8-.06 3.21 0 3.58.01 4.84.07 1.17.05 1.8.24 2.43.46.66.22 1.15.53 1.63.98.48.45.76.97.98 1.63.22.62.41 1.17.46 1.81.05 1.06 0.06 1.36.07 3.8zm0 1.44c-3.11 0-3.48-.01-4.7-.07-1.02-.04-1.5-.2-1.8-.33-.35-.14-.64-.32-.93-.6-.29-.29-.46-.58-.6-.93-.13-.3-.19-.78-.33-1.8-.05-1.22-.07-1.59-.07-4.7s.01-3.48.07-4.7c.04-1.02.2-1.5.33-1.8.14-.35.32-.64.6-.93.29-.29.58-.46.93-.6.3-.13.78-.19 1.8-.33 1.22-.05 1.59-.07 4.7-.07 3.11 0 3.48.01 4.7.07 1.02.04 1.5.2 1.8.33.35.14.64.32.93.6.29.29.46.58.6.93.13.3.19-.78.33 1.8.05 1.22.07 1.59.07 4.7s-.01 3.48-.07 4.7c-.04 1.02-.2 1.5-.33 1.8-.14.35-.32.64-.6.93-.29-.29-.58.46-.93.6-.3.13-.78-.19-1.8.33-1.22.05-1.59.07-4.7.07zm0-7.7c-2.07 0-3.75 1.68-3.75 3.75s1.68 3.75 3.75 3.75 3.75-1.68 3.75-3.75-1.68-3.75-3.75-3.75zm0 6c-1.24 0-2.25-1.01-2.25-2.25s1.01-2.25 2.25-2.25 2.25 1.01 2.25 2.25-1.01 2.25-2.25 2.25-2.25-1.01-2.25-2.25z"></path></svg></a><a href="#" title="Facebook"><svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M14 13.5h2.5l.5-3h-3v-2c0-.82.47-1.5 1.5-1.5H17V4.5c-1.09 0-2.14.19-3.13.55C12.02 5.54 11 6.94 11 9v2H8v3h3v7.5h3V13.5z"></path></svg></a></div></div><div class="footer-links"><h3>SOBRE</h3><ul><li><a href="#">Sobre</a></li><li><a href="#">Nosso trabalho</a></li><li><a href="#">Trabalhe conosco</a></li></ul></div><div class="footer-links"><h3>AJUDA</h3><ul><li><a href="#">Suporte</a></li><li><a href="#">Calcular Frete</a></li><li><a href="#">Termos e Condições</a></li><li><a href="#">Políticas e Privacidade</a></li></ul></div><div class="footer-links"><h3>FAQ</h3><ul><li><a href="#">Conta</a></li><li><a href="#">Reclamações</a></li><li><a href="#">Pagamento</a></li></ul></div></div><div class="footer-bottom"><p>Joalheria © 2000-2025 - Todos direitos reservados</p></div></footer>

    <!-- Purchase success modal (simulação) -->
    <div id="purchase-modal" style="display:none;position:fixed;inset:0;align-items:center;justify-content:center;background:rgba(0,0,0,0.45);z-index:9999;">
        <div style="background:#fff;padding:26px 28px;border-radius:10px;max-width:420px;width:90%;text-align:center;box-shadow:0 10px 30px rgba(0,0,0,0.25);">
            <div style="font-size:48px;color:#2ecc71;line-height:1;margin-bottom:8px;">✓</div>
            <h3 style="margin:0 0 8px 0;font-size:20px;">Compra realizada com sucesso!</h3>
            <p style="margin:0 0 16px 0;color:#555;">Obrigado pela sua compra. Em instantes você será redirecionado à página inicial.</p>
            <button id="purchase-modal-close" style="background:#333;color:#fff;border:0;padding:8px 14px;border-radius:6px;cursor:pointer;">Fechar</button>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const checkoutBtn = document.querySelector('.btn-checkout');
            const modal = document.getElementById('purchase-modal');
            const closeBtn = document.getElementById('purchase-modal-close');

            function showModal(){ if(modal) modal.style.display = 'flex'; }
            function hideModal(){ if(modal) modal.style.display = 'none'; }

            if(closeBtn){ closeBtn.addEventListener('click', function(e){ e.preventDefault(); hideModal(); }); }

            if(!checkoutBtn) return;

            checkoutBtn.addEventListener('click', function(e){
                e.preventDefault();
                // Desativar botão para evitar múltiplos envios
                checkoutBtn.disabled = true;
                checkoutBtn.classList.add('disabled');

                // Mostrar modal de sucesso
                showModal();

                // Simular processamento: limpar itens do carrinho visualmente
                try{
                    const items = document.querySelectorAll('.cart-item');
                    items.forEach(it => it.remove());
                    const subtotalEl = document.getElementById('subtotal');
                    const totalEl = document.getElementById('total');
                    if(subtotalEl) subtotalEl.textContent = 'R$ 0,00';
                    if(totalEl) totalEl.textContent = 'R$ 0,00';
                    const countEl = document.querySelector('.cart-item-count');
                    if(countEl) countEl.textContent = '0';
                }catch(err){ console.warn('Erro ao limpar carrinho visual:', err); }

                // Fechar modal e redirecionar após 3s
                setTimeout(function(){
                    hideModal();
                    // redireciona para a home
                    window.location.href = "{{ route('index') }}";
                }, 3000);
            });
        });
    </script>
</body>
</html>
