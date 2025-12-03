<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feminino - Joalheria</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>

    <div class="top-bar">
        <span>Faça login e ganhe 20% em sua primeira compra. <a href="{{ url('/cadastro') }}">Registre-se</a></span>
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
            <a href="index">Página Inicial</a>
            <span>&gt;</span>
            <span class="current">Feminino</span>
        </nav>

        <div class="listing-layout">
            <aside class="listing-sidebar">
                <div class="filter-group">
                    <h3 class="filter-title">Filtros</h3>
                    <div class="filter-options">
                        <a href="#" class="filter-item" data-cat="relogios"><span>Relógios</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item" data-cat="pulseira"><span>Pulseira</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item" data-cat="corrente"><span>Corrente</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item" data-cat="anel"><span>Anel</span> <span>&gt;</span></a>
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
                        <span class="color-swatch" data-color="ouro" style="background-color: #fde047;" title="Ouro"></span>
                        <span class="color-swatch" data-color="prata" style="background-color: #d1d5db;" title="Prata"></span>
                    </div>
                </div>

                <button id="apply-filters-btn" class="btn btn-dark" style="width: 100%;">Aplicar Filtros</button>
            </aside>

            <section class="listing-products">
                    <div class="listing-header">
                    <h1>Feminino</h1>
                    <div class="sort-by">
                        <span id="listing-count">Filtrado 1-10 a 100 Produtos</span>
                        <div class="sort-controls">
                            
                        </div>
                    </div>
                </div>

                <div class="product-grid listing" id="product-grid">
                    <!-- Products will be rendered here by JS -->
                </div>

                ...
            </section>
        </div>
    </main>

... (truncated) ...
