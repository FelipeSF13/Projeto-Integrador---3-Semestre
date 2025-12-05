@extends('layouts.app')

@section('title', 'Joalheria - Página Inicial')

@section('content')
        <section class="banner">
            <img src="{{ asset('img/banner.png') }}" alt="Banner de Noivados">
        </section>

        <section class="brands-bar">
            <div class="brands-scroll-content">
                @php
                    $brands = ['VERSACE', 'ZARA', 'GUCCI', 'PRADA', 'CALVIN KLEIN'];
                    $categories = ['feminino', 'masculino'];
                @endphp
                @foreach($brands as $brand)
                    @foreach($categories as $category)
                        <span data-brand="{{ $brand }}" data-category="{{ $category }}" title="Clique para filtrar {{ $category }} de {{ $brand }}">{{ $brand }}</span>
                    @endforeach
                @endforeach
            </div>
        </section>

        <section class="container">
            <h2 class="section-title">Novidades</h2>
            <div class="product-grid" id="product-grid-container">
                @forelse($products->take(6) as $product)
                    <a href="{{ route('produto', ['id' => $product->id]) }}" class="product-card" data-productid="{{ $product->id }}">
                        <img src="{{ asset('img/placeholder.svg') }}" 
                             alt="{{ $product->name }}">
                        <h3>{{ $product->name }}</h3>
                        <p class="price">
                            <span class="sale">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                        </p>
                    </a>
                @empty
                    <p style="grid-column: 1 / -1; text-align: center;">Nenhum produto disponível.</p>
                @endforelse
            </div>
            <div class="view-more-container">
                <button class="btn-outline" id="load-more-btn">Ver mais</button>
            </div>
        </section>

        <section class="container">
            <h2 class="section-title">FeedBack</h2>
            <div class="feedback-grid">
                <div class="feedback-card"><div class="user"><span>Ana Garcia</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg></div><div class="rating"><script>for(let i=0; i<5; i++) document.write('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>');</script></div><p>"Entrega super rápida e o produto é de excelente qualidade..."</p></div>
                <div class="feedback-card"><div class="user"><span>Maria Santos</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg></div><div class="rating"><script>for(let i=0; i<5; i++) document.write('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>');</script></div><p>"Atendimento impecável, voltarei a comprar!"</p></div>
                <div class="feedback-card"><div class="user"><span>Sofia L.</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg></div><div class="rating"><script>for(let i=0; i<4; i++) document.write('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>');</script><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star-empty"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg></div><p>"Joias maravilhosas. Recomendo a todos."</p></div>
            </div>
        </section>

@include('partials.contact')
@endsection

@section('extra-scripts')
<script src="{{ asset('js/product-images.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Dados de todos os produtos passados do PHP para JS
        const allProducts = @json($products);
        const productsPerPage = 6;
        let currentIndex = productsPerPage;
        
        const loadMoreBtn = document.getElementById('load-more-btn');
        const gridContainer = document.getElementById('product-grid-container');

        if (!loadMoreBtn) return;

        loadMoreBtn.addEventListener('click', (e) => {
            e.preventDefault();

            // Adiciona os próximos produtos
            for (let i = currentIndex; i < Math.min(currentIndex + productsPerPage, allProducts.length); i++) {
                const product = allProducts[i];
                const productLink = document.createElement('a');
                productLink.href = `/produto/${product.id}`;
                productLink.className = 'product-card';
                productLink.setAttribute('data-productid', product.id);
                productLink.innerHTML = `
                    <img src="{{ asset('img/placeholder.svg') }}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p class="price">
                        <span class="sale">R$ ${parseFloat(product.price).toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}</span>
                    </p>
                `;
                gridContainer.appendChild(productLink);
            }

            currentIndex += productsPerPage;

            // Esconde o botão se não há mais produtos
            if (currentIndex >= allProducts.length) {
                loadMoreBtn.style.display = 'none';
            }
        });

        // Esconde o botão se já não há mais produtos para mostrar
        if (allProducts.length <= productsPerPage) {
            loadMoreBtn.style.display = 'none';
        }
    });
</script>
@endsection