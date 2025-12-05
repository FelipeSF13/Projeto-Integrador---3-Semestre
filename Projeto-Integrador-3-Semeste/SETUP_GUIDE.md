# Guia de Configuração - Projeto Integrador 3º Semestre

## Status do Projeto ✅

O projeto agora está **totalmente funcional** com as seguintes correções implementadas:

### ✅ Correções Realizadas:

1. **Rotas Corrigidas**
   - Ajustadas as rotas do painel admin para coincidir com as views
   - Rotas agora usam padrão: `/adm-produto`, `/adm-usuarios`, `/adm-dashboard`, `/adm-cadastro`

2. **Modelo de Produtos (Joias)**
   - Criado modelo `Product` com campos: name, description, price, category, image, stock
   - Criada migration para a tabela `products`

3. **Banco de Dados Populado**
   - Criado seeder com 10 produtos de joias
   - 5 produtos na categoria feminino
   - 5 produtos na categoria masculino

4. **Controllers**
   - Criado `ProductController` para gerenciar produtos
   - Rotas conectadas aos controllers

## 📋 Instruções de Configuração

### Pré-requisitos:
- PHP 8.2 ou superior
- Composer
- SQLite (já incluído no PHP)

### 1️⃣ Instalar PHP (se não tiver)

Em um terminal do sistema (não do VS Code):

```bash
sudo apt update
sudo apt install -y php php-cli php-common php-mbstring php-xml php-zip php-curl php-mysql php-sqlite3 php-bcmath php-intl php-gd composer
```

### 2️⃣ Gerar Chave de Aplicação

```bash
cd ~/Documentos/SENAC/PI/3-SEMESTRE/Projeto-Integrador---3-Semestre/Projeto-Integrador-3-Semeste
php artisan key:generate
```

### 3️⃣ Executar Migrações e Popular Banco

```bash
# Executar migrações e seeders
php artisan migrate
php artisan db:seed

# Ou use o script fornecido:
chmod +x setup_database.sh
./setup_database.sh
```

### 4️⃣ Iniciar o Servidor

```bash
php artisan serve
```

O servidor estará disponível em: **http://localhost:8000**

---

## 🧪 Testando Funcionalidades

### Páginas Principais:
- ✅ **Página Inicial** → http://localhost:8000
- ✅ **Produtos Femininos** → http://localhost:8000/feminino
- ✅ **Produtos Masculinos** → http://localhost:8000/masculino
- ✅ **Detalhe do Produto** → http://localhost:8000/produto/1
- ✅ **Carrinho** → http://localhost:8000/carrinho
- ✅ **Pagamento** → http://localhost:8000/pagamento

### Painel Admin:
- ✅ **Dashboard** → http://localhost:8000/adm-dashboard
- ✅ **Produtos** → http://localhost:8000/adm-produto
- ✅ **Usuários** → http://localhost:8000/adm-usuarios
- ✅ **Cadastrar Produto** → http://localhost:8000/adm-cadastro

### Autenticação:
- ✅ **Login** → http://localhost:8000/login
- ✅ **Cadastro** → http://localhost:8000/cadastro

---

## 📦 Produtos Disponíveis no Banco

### Feminino:
1. Anel de Ouro com Diamante - R$ 2.500,00
2. Colar de Ouro Rose - R$ 1.800,00
3. Brinco de Esmeralda - R$ 3.200,00
4. Pulseira de Ouro com Safira - R$ 2.100,00
5. Anel de Noivado Solitário - R$ 5.000,00

### Masculino:
1. Anel Masculino de Ouro - R$ 1.200,00
2. Pulseira de Ouro Malha - R$ 1.600,00
3. Corrente de Ouro Grumet - R$ 2.200,00
4. Relógio de Ouro - R$ 4.500,00
5. Brinco de Ouro para Homem - R$ 800,00

---

## 🔧 Estrutura do Projeto

```
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Controller.php
│   │       └── ProductController.php
│   └── Models/
│       ├── User.php
│       └── Product.php
├── database/
│   ├── migrations/
│   │   ├── 2024_12_04_000000_create_products_table.php
│   │   └── ... (outras migrações)
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── ProductSeeder.php
├── resources/
│   └── views/
│       ├── index.blade.php
│       ├── feminino.blade.php
│       ├── masculino.blade.php
│       ├── detalhe-produto.blade.php
│       ├── login.blade.php
│       ├── cadastro.blade.php
│       ├── carrinho.blade.php
│       ├── pagamento.blade.php
│       ├── admin_dashboard.blade.php
│       ├── admin_produtos.blade.php
│       ├── admin_usuarios.blade.php
│       └── admin_cadastrar_produto.blade.php
├── routes/
│   └── web.php
├── public/
│   ├── css/
│   ├── js/
│   └── img/
└── ...
```

---

## 🐛 Troubleshooting

### Erro: "php: comando não encontrado"
- Instale PHP usando o comando de instalação acima

### Erro: "Database file does not exist"
- Execute: `php artisan migrate`

### Erro: "No application encryption key has been specified"
- Execute: `php artisan key:generate`

### Produtos não aparecem nas páginas
- Verifique se executou: `php artisan db:seed`
- Verifique se a migration foi executada: `php artisan migrate`

---

## 📝 Próximos Passos Sugeridos

1. Implementar autenticação de usuários
2. Conectar formulário de contato a um banco de dados
3. Implementar carrinho de compras com sessão
4. Implementar sistema de pagamento
5. Adicionar dashboard funcional para admin

---

**Projeto criado e configurado com sucesso!** 🎉
