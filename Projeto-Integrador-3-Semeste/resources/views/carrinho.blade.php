@extends('layouts.app')

@section('title', 'Carrinho - Elegance Joias')

@section('content')
    <div class="container">
        <nav class="breadcrumb">
            <a href="{{ route('index') }}">Página Inicial</a>
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

@include('partials.contact')
@endsection