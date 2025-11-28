<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel ADM - Produtos em Estoque</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body class="admin-body-bg">

    <header class="admin-header">
         <div class="admin-header-content container">
            <nav aria-label="breadcrumb" class="admin-breadcrumbs">
                <ol>
                    <li><a href="{{ route('adm-dashboard') }}">Painel</a></li>
                    <li><span>&gt;</span></li>
                    <li aria-current="page">Usuários Cadastrados</li>
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
                    <span class="user-name">Júlia</span>
                </div>
            </div>
        </div>
    </header>

    <main class="admin-main container">
        <div class="admin-card">
            <h2>Em estoque</h2>
            <p class="subtitle">Produtos em Estoque</p>

            <nav class="admin-tabs">
                <a href="{{ route('adm-produto') }}" class="active">Em estoque</a>
                <a href="{{ route('adm-usuarios') }}">Usuários</a>
                <a href="{{ route('adm-cadastro') }}">Cadastrar Produtos</a>
            </nav>

            <div class="admin-action-bar">
                <div class="left-actions">
                    <a href="javascript:history.back()" class="back-btn">&larr; Voltar</a>
                </div>
                <div class="right-actions">
                    <button class="icon-button"><i class="far fa-calendar-alt"></i></button>
                    <button class="btn btn-secondary dropdown-toggle">Filtros <i class="fas fa-chevron-down"></i></button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th><input type="checkbox" aria-label="Selecionar todos"></th>
                            <th>Produto</th>
                            <th>Categoria</th>
                            <th>ID</th>
                            <th>Preço</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Relógio Rolex"></td>
                            <td>Relógio Rolex</td>
                            <td><span class="badge badge-relogio">Relógio</span></td>
                            <td>1</td>
                            <td>R$ 1.999,00</td>
                            <td>10.03.2025 <span class="time">11:16 AM</span></td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Corrente de Prata"></td>
                            <td>Corrente de Prata</td>
                            <td><span class="badge badge-corrente">Corrente</span></td>
                            <td>2</td>
                            <td>R$ 750</td>
                            <td>10.03.2025 <span class="time">11:16 AM</span></td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Bracelete de Prata"></td>
                            <td>Bracelete de Prata</td>
                            <td><span class="badge badge-pulseira">Pulseira</span></td>
                            <td>3</td>
                            <td>R$ 500</td>
                            <td>10.03.2025 <span class="time">11:16 AM</span></td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Relógio de Luxo"></td>
                            <td>Relógio de Luxo</td>
                            <td><span class="badge badge-relogio">Relógio</span></td>
                            <td>4</td>
                            <td>R$ 30.000</td>
                            <td>10.03.2025 <span class="time">11:16 AM</span></td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Brinco de Ouro"></td>
                            <td>Brinco de Ouro</td>
                            <td><span class="badge badge-brincos">Brincos</span></td>
                            <td>5</td>
                            <td>R$ 900</td>
                            <td>10.03.2025 <span class="time">11:16 AM</span></td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" aria-label="Selecionar Anel de Esmeralda"></td>
                            <td>Anel de Esmeralda</td>
                            <td><span class="badge badge-anel">Anel</span></td>
                            <td>6</td>
                            <td>R$ 300</td>
                            <td>10.03.2025 <span class="time">11:16 AM</span></td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                         <tr>
                            <td><input type="checkbox" aria-label="Selecionar Colar de prata"></td>
                            <td>Colar de prata</td>
                            <td><span class="badge badge-colar">Colar</span></td>
                            <td>7</td>
                            <td>R$ 2.000</td>
                            <td>10.03.2025 <span class="time">11:16 AM</span></td>
                            <td><button class="icon-button actions" aria-label="Mais ações"><i class="fas fa-ellipsis-h"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
             </div>
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
