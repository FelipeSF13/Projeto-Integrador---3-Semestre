@extends('layouts.admin')

@section('title', 'Painel ADM - Cadastrar Produto')

@section('breadcrumb', 'Cadastrar Produto')

@section('content') 

<div class="admin-card"> 
            <h2>Cadastrar produtos</h2>
            <p class="subtitle">Adicione um novo produto ao catálogo</p>

            @if ($errors->any())
                <div style="background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 12px; border-radius: 4px; margin-bottom: 20px;">
                    <strong>Erro ao validar formulário:</strong>
                    <ul style="margin: 10px 0 0 0; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <nav class="admin-tabs">
                <a href="{{ route('adm-produto') }}">Em estoque</a>
                <a href="{{ route('adm-usuarios') }}">Usuários</a>
                <a href="{{ route('adm-cadastro') }}" class="active">Cadastrar Produtos</a>
            </nav>
            <form action="{{ route('adm-produto-store') }}" method="POST" enctype="multipart/form-data" class="admin-form product-form-layout">
                @csrf
                
                <div class="form-fields">
                    <div class="form-group">
                        <label for="name">Nome do Produto *</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Ex: Anel de Ouro">
                        @error('name')<span class="error-text">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição *</label>
                        <textarea id="description" name="description" required placeholder="Descreva o produto...">{{ old('description') }}</textarea>
                        @error('description')<span class="error-text">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="text">Detalhes Adicionais</label>
                        <textarea id="text" name="text" placeholder="Informações extras...">{{ old('text') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Preço (R$) *</label>
                        <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" required placeholder="Ex: 500.00"> 
                        @error('price')<span class="error-text">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria *</label>
                        <select id="category" name="category" required>
                            <option value="">Selecione uma categoria</option>
                            <option value="feminino" {{ old('category') === 'feminino' ? 'selected' : '' }}>Feminino</option>
                            <option value="masculino" {{ old('category') === 'masculino' ? 'selected' : '' }}>Masculino</option>
                        </select>
                        @error('category')<span class="error-text">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="brand">Marca</label>
                        <input type="text" id="brand" name="brand" value="{{ old('brand') }}" placeholder="Ex: VERSACE, GUCCI, PRADA">
                    </div>
                    <div class="form-group">
                        <label for="stock">Quantidade em Estoque *</label>
                        <input type="number" id="stock" name="stock" value="{{ old('stock') }}" required placeholder="Ex: 10" min="0"> 
                        @error('stock')<span class="error-text">{{ $message }}</span>@enderror
                    </div> 

                </div>

                <div class="image-upload-area">
                     <div class="image-placeholder">
                         <i class="fas fa-image fa-3x"></i>
                         <p class="form-help-text">As imagens serão geradas automaticamente com base no tipo de produto</p>
                     </div>
                     <label for="product_image" class="btn btn-dark">Carregar Imagem (Opcional)</label>
                     <input type="file" id="product_image" name="image" accept="image/*" style="display: none;"> 
                </div>

                <div class="form-actions">
                     <button type="submit" class="btn btn-primary">Salvar Produto</button>
                     <a href="{{ route('adm-produto') }}" class="btn btn-secondary">Cancelar</a> 
                </div>
            </form>
        </div>
    </main>

@endsection