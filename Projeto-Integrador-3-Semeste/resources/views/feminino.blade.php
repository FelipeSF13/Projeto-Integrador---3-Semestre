@extends('layouts.app')

@section('title', 'Coleção Feminina - Elegance Joias')

@section('content')

    <nav class="breadcrumb">
        <a href="{{ route('index') }}">Página Inicial</a>
        <span>&gt;</span>
        <span class="current">Feminino</span>
    </nav>

    <div class="listing-layout">
        <aside class="listing-sidebar">
                <div class="filter-group">
                    <h3 class="filter-title">Filtros</h3>
                    <div class="filter-options" id="category-filters">
                        <a href="#" class="filter-item" data-category="todos"><span>Todos</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item" data-category="anel"><span>Anel</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item" data-category="colar"><span>Colar</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item" data-category="brinco"><span>Brinco</span> <span>&gt;</span></a>
                        <a href="#" class="filter-item" data-category="pulseira"><span>Pulseira</span> <span>&gt;</span></a>
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
                    <div class="color-filter-list" id="color-filters">
                        <button class="color-swatch" style="background-color: #fde047;" title="Ouro" data-color="ouro" aria-label="Filtro de cor Ouro"></button>
                        <button class="color-swatch" style="background-color: #d1d5db;" title="Prata" data-color="prata" aria-label="Filtro de cor Prata"></button>
                    </div>
                </div>

                <button class="btn btn-dark" id="apply-filters" style="width: 100%;">Aplicar Filtros</button>
            </aside>

            <section class="listing-products">
                <div class="listing-header">
                    <h1>Feminino
                        @if($selectedBrand ?? false)
                            <span style="font-size: 0.7em; color: #999; margin-left: 10px;">- {{ $selectedBrand }}</span>
                            <a href="{{ route('feminino') }}" style="font-size: 0.7em; margin-left: 10px; color: #007bff; text-decoration: underline;">Limpar filtro</a>
                        @endif
                    </h1>
                    <div class="sort-by">
                        <span id="filter-counter">Carregando produtos...</span>
                        <span>Por: <strong>Mais popular &vee;</strong></span>
                    </div>
                </div>

                <div class="product-grid listing" id="product-listing">
                    @forelse($products as $product)
                        @php
                            $nameLower = mb_strtolower($product->name);
                            $type = 'outros';
                            if (str_contains($nameLower, 'anel')) { $type = 'anel'; }
                            elseif (str_contains($nameLower, 'colar')) { $type = 'colar'; }
                            elseif (str_contains($nameLower, 'brinco')) { $type = 'brinco'; }
                            elseif (str_contains($nameLower, 'pulseira')) { $type = 'pulseira'; }

                            $color = 'neutro';
                            if (str_contains($nameLower, 'prata')) { $color = 'prata'; }
                            elseif (str_contains($nameLower, 'ouro')) { $color = 'ouro'; }
                        @endphp
                        <a href="{{ route('produto', ['id' => $product->id]) }}" class="product-card" data-productid="{{ $product->id }}" data-price="{{ $product->price }}" data-color="{{ $color }}" data-type="{{ $type }}">
                            <img src="{{ $product->image }}" 
                                 alt="{{ $product->name }}"
                                 onerror="this.src='https://via.placeholder.com/500x500?text=Joia'">
                            <h3>{{ $product->name }}</h3>
                            <p class="price">
                                <span class="sale">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                            </p>
                            <p class="stock">Estoque: {{ $product->stock }}</p>
                        </a>
                    @empty
                        <p style="grid-column: 1 / -1; text-align: center;">Nenhum produto disponível nesta categoria.</p>
                    @endforelse
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

    @include('partials.contact')
@endsection

@section('extra-scripts')
<script src="{{ asset('js/filters.js') }}"></script>
<script src="{{ asset('js/product-images.js') }}"></script>
@endsection