<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Cadastrar Produto</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="admin-body-bg">

    <header class="admin-header">
         <div class="admin-header-content container">
            <nav aria-label="breadcrumb" class="admin-breadcrumbs">
                <ol>
                    <li><a href="{{ route('adm-dashboard') }}">Painel</a></li>
                    <li><span>&gt;</span></li>
                    <li aria-current="page">Cadastrar Produtos</li>
                </ol>
            </nav>
            <div class="admin-header-right">
                <div class="admin-search">
                    <i class="fas fa-search"></i>
                    <input type="search" placeholder="Pesquisar">
                </div>
                <button class="icon-button notifications" aria-label="Notificações">
                    <i class="fas fa-bell"></i>
                    <span class="badge notification-badge">3</span>
                </button>
                <div class="user-profile">
                    <span class="user-initial">J</span>
                    <span class="user-name">Jilia</span>
                </div>
            </div>
        </div>
    </header>

    <main class="admin-main container">
        <div class="admin-card">
            <h2>Cadastrar produtos</h2>
            <p class="subtitle">Cadastramento de produtos</p>

            <nav class="admin-tabs">
                <a href="{{ route('adm-produto') }}">Em estoque</a>
                <a href="{{ route('adm-usuarios') }}">Usuários</a>
                <a href="{{ route('adm-cadastro') }}" class="active">Cadastrar Produtos</a>
            </nav>


            <form action="#" method="POST" enctype="multipart/form-data" class="admin-form product-form-layout">


                <div class="form-fields">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" value="Relógio Rolex" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <input type="text" id="description" name="description" value="Relógio de Ouro Moderno">
                    </div>
                     <div class="form-group">
                        <label for="price">Preço</label>
                        <input type="text" id="price" name="price" value="R$ 6.000" required>
                    </div>
                     <div class="form-group">
                        <label for="product_id_display">ID</label>
                        <input type="text" id="product_id_display" name="product_id_display" value="1" disabled>
                    </div>
                     <div class="form-group">
                        <label for="category">Categoria</label>
                        <input type="text" id="category" name="category" value="Relogio" required>
                        <span class="badge badge-relogio" style="margin-left: 10px;">Relógio</span>
                    </div>


                   <div class="form-group">
                        <label for="stock">Quantidade</label>
                        <input type="number" id="stock" name="stock" value="10" required>
                    </div>

                </div>

                <div class="image-upload-area">
                     <div class="image-placeholder">
                         <i class="fas fa-image fa-3x"></i> </div>
                     <label for="product_image" class="btn btn-dark">Carregar Imagem</label>
                     <input type="file" id="product_image" name="image" accept="image/*" style="display: none;">
                </div>

                <div class="form-actions">
                     <button type="submit" class="btn btn-primary">Salvar Produto</button>
                     <a href="{{ route('adm-produto') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </main>



    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
