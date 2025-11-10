<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Dashboard</title> 
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="admin-body-bg"> 

    <header class="admin-header">
        <div class="admin-header-content container">
            <nav aria-label="breadcrumb" class="admin-breadcrumbs">
                <ol>
                    <li aria-current="page">Painel</li> </ol>
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
                    <span class="user-name">Júlia </span>
                </div>
            </div>
        </div>
    </header>

    <main class="admin-main container">
        <div class="admin-card"> 
            <h2>Painel Principal</h2>
            <p class="subtitle">Selecione uma opção abaixo para gerenciar sua loja.</p>

            <div class="dashboard-navigation">
                
                <a href="admin_produtos.html" class="dashboard-link-card">
                    <i class="fas fa-boxes fa-2x"></i> <span>Produtos em Estoque</span>
                    <p>Visualizar e gerenciar produtos existentes.</p>
                </a>

                <a href="admin_usuarios.html" class="dashboard-link-card">
                    <i class="fas fa-users fa-2x"></i> <span>Usuários Cadastrados</span>
                    <p>Verificar e administrar contas de usuários.</p>
                </a>

                <a href="admin_cadastrar_produto.html" class="dashboard-link-card">
                     <i class="fas fa-plus-circle fa-2x"></i> <span>Cadastrar Novo Produto</span>
                    <p>Adicionar novos itens ao catálogo da loja.</p>
                </a>
                
                </div>
        </div>
    </main>

    <script src="js/script.js"></script> 
</body>
</html>