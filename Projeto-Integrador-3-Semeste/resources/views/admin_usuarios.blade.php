<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Usuários Cadastrados</title> 
    <link rel="stylesheet" href="{{ ('css/style.css') }}">
   
</head>
<body class="admin-body-bg"> 

    <header class="admin-header">
        <div class="admin-header-content container">
            <nav aria-label="breadcrumb" class="admin-breadcrumbs">
                <ol>
                    <li><a href="admin_dashboard.html">Painel</a></li> 
                    <li><span>&gt;</span></li>
                    <li aria-current="page">Usuários Cadastrados</li> 
                </ol>
            </nav>
            <div class="admin-header-right">
                <div class="admin-search">
                    <i class="fas fa-search"></i> <input type="search" placeholder="Pesquisar">
                </div>
                <button class="icon-button notifications" aria-label="Notificações">
                    <i class="fas fa-bell"></i> <span class="badge notification-badge">3</span> 
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
            <h2>Usuários Cadastrados</h2>

            <nav class="admin-tabs">
                <a href="admin_produtos.html">Em estoque</a> 
                <a href="admin_usuarios.html" class="active">Usuários</a> 
                <a href="admin_cadastrar_produto.html">Cadastrar Produtos</a> 
            </nav>

            <div class="admin-action-bar">
                <button class="icon-button"><i class="far fa-calendar-alt"></i></button> <button class="btn btn-secondary dropdown-toggle">Filtros <i class="fas fa-chevron-down"></i></button> </div>

            <div class="table-responsive"> 
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox" aria-label="Selecionar todos"></th>
                            <th>Nome</th> <th>Função</th> <th>ID</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" aria-label="Selecionar Claudio"></td>
                            <td>Claudio</td>
                            <td><span class="badge badge-adm">ADM</span></td>
                            <td>1</td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td> </tr>
                        <tr>
                            <td><input type="checkbox" aria-label="Selecionar Felipe"></td>
                            <td>Felipe</td>
                            <td><span class="badge badge-adm">ADM</span></td>
                            <td>2</td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Arthur"></td>
                            <td>Arthur</td>
                            <td><span class="badge badge-adm">ADM</span></td>
                            <td>3</td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" aria-label="Selecionar Julio"></td>
                            <td>Julio</td>
                            <td><span class="badge badge-adm">ADM</span></td>
                            <td>4</td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" aria-label="Selecionar Wanessa"></td>
                            <td>Wanessa</td>
                            <td><span class="badge badge-adm">ADM</span></td>
                            <td>5</td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Wesley"></td>
                            <td>Wesley</td>
                            <td><span class="badge badge-adm">ADM</span></td>
                            <td>6</td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </main>

    <script src="js/script.js"></script> 
</body>
</html>