# 👨‍🏫 Guia Técnico para o Professor

## 📌 Resumo Executivo

**Elegance Joias** é um e-commerce completo de joias desenvolvido em **Laravel 11** com arquitetura MVC profissional, segurança implementada e código bem organizado.

**Tempo estimado para apresentação**: 15-20 minutos

---

## 🎯 O Que Vamos Demonstrar

### 1️⃣ **Funcionalidades Públicas** (3 min)
```
✅ Homepage com catálogo de produtos
✅ Filtros por categoria (Feminino/Masculino)
✅ Detalhes do produto
✅ Carrinho de compras
✅ Responsividade mobile
```

### 2️⃣ **Sistema de Autenticação** (2 min)
```
✅ Cadastro de novo usuário
✅ Login com validação
✅ Menu dropdown com perfil
✅ Logout seguro
```

### 3️⃣ **Painel Administrativo** (5 min)
```
✅ Dashboard com dados
✅ CRUD de produtos (Criar, Editar, Deletar)
✅ Gestão de usuários
✅ Proteção por autenticação
```

---

## 🏗️ Arquitetura Técnica

### **Padrão MVC**
```
Controller    → Processa requisições, valida dados, chama Model
    ↓
Model         → Interage com banco de dados (Eloquent ORM)
    ↓
View (Blade)  → Renderiza HTML para o usuário
```

### **Arquivos Principais**

#### **Controllers** (`app/Http/Controllers/`)
| Arquivo | Responsabilidade |
|---------|-----------------|
| `ProductController` | Listar produtos, filtrar, detalhes |
| `AuthController` | Login, registro, logout |
| `AdminController` | CRUD de produtos e usuários |

#### **Models** (`app/Models/`)
| Arquivo | Tabela | Campos |
|---------|--------|--------|
| `User` | users | id, name, email, password |
| `Product` | products | id, name, price, category, brand, stock |

#### **Views** (`resources/views/`)
```
layouts/
├── app.blade.php          ← Layout para páginas públicas
└── admin.blade.php        ← Layout para admin

partials/
├── header.blade.php       ← Cabeçalho com logo e menu
├── footer.blade.php       ← Rodapé com links
├── top-bar.blade.php      ← Barra superior
├── contact.blade.php      ← Formulário de contato
└── admin-header.blade.php ← Menu admin

[páginas].blade.php (13 arquivos)
├── index.blade.php              ← Homepage
├── feminino.blade.php           ← Categoria feminina
├── masculino.blade.php          ← Categoria masculina
├── detalhe-produto.blade.php    ← Detalhes do produto
├── login.blade.php              ← Login
├── cadastro.blade.php           ← Registro
├── carrinho.blade.php           ← Carrinho
├── pagamento.blade.php          ← Pagamento
├── admin_dashboard.blade.php    ← Dashboard admin
├── admin_produtos.blade.php     ← Lista de produtos
├── admin_cadastrar_produto.blade.php ← Criar produto
├── admin_editar_produto.blade.php    ← Editar produto
└── admin_usuarios.blade.php     ← Gestão de usuários
```

---

## 🔐 Segurança Implementada

### ✅ CSRF Protection
```php
// Todos os formulários incluem token CSRF
@csrf
```
**O que faz**: Impede ataques de Cross-Site Request Forgery

### ✅ Password Hashing (Bcrypt)
```php
'password' => bcrypt('senha'),
```
**O que faz**: Armazena senhas criptografadas no banco

### ✅ Middleware de Autenticação
```php
Route::middleware('auth')->group(function () {
    // Apenas usuários autenticados acessam
});
```
**O que faz**: Protege rotas administrativas

### ✅ Validação Server-Side
```php
$validated = $request->validate([
    'email' => 'required|email|unique:users',
    'password' => 'required|min:6'
]);
```
**O que faz**: Valida dados antes de salvar no banco

---

## 📊 Banco de Dados

### Estrutura

```sql
-- Tabela de Usuários
CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);

-- Tabela de Produtos
CREATE TABLE products (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    price DECIMAL(8,2),
    category VARCHAR(50),    -- 'feminino' ou 'masculino'
    brand VARCHAR(100),
    stock INT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### Relacionamentos
```
User ──────→ (1 para muitos) ──────→ Nenhum (em produção: Orders)
Product ────→ (sem relacionamento direto com User)
```

---

## 🔄 Fluxo de Requisição

### Exemplo: Acessar Produtos Femininos

```
1. Usuário clica em "Feminino" no menu
                    ↓
2. Browser envia GET /feminino
                    ↓
3. Laravel Router → ProductController@feminino
                    ↓
4. Controller busca: Product::where('category', 'feminino')->get()
                    ↓
5. Model retorna dados do banco
                    ↓
6. View renderiza products em feminino.blade.php
                    ↓
7. HTML é enviado ao browser
```

### Exemplo: Criar Novo Produto (Admin)

```
1. Admin acessa /adm-cadastro
                    ↓
2. Middleware 'auth' verifica autenticação
                    ↓
3. View exibe formulário (admin_cadastrar_produto.blade.php)
                    ↓
4. Admin preenche e envia POST /adm-produtos
                    ↓
5. AdminController@storeProduct valida dados
                    ↓
6. Product::create($validated) salva no banco
                    ↓
7. Redireciona com mensagem de sucesso
```

---

## 🎨 Frontend - Blade Templating

### O Que é Blade?

Blade é o **template engine** do Laravel que permite:
- ✅ Herança de layouts
- ✅ Inclusão de componentes
- ✅ Lógica PHP limpa e legível

### Exemplo: Herança de Layout

```blade
<!-- resources/views/layouts/app.blade.php (Master) -->
<html>
  <body>
    @include('partials.header')
    @yield('content')  <!-- Espaço para conteúdo específico -->
    @include('partials.footer')
  </body>
</html>

<!-- resources/views/feminino.blade.php (Child) -->
@extends('layouts.app')  <!-- Estende o layout -->

@section('content')      <!-- Define o conteúdo -->
  <h1>Categoria Feminina</h1>
  @foreach($products as $product)
    <div>{{ $product->name }}</div>
  @endforeach
@endsection
```

**Benefício**: Evita repetição de código, mantém consistência

---

## 📱 Responsividade

### CSS Organizados
```
public/css/
├── style.css          ← Estilos base (layout, cores, tipografia)
├── admin.css          ← Estilos do painel admin
├── info.css           ← Estilos das páginas de informação
├── atomic/            ← Componentes reutilizáveis
│   ├── buttons.css
│   ├── cards.css
│   └── forms.css
└── brands-bar.css     ← Barra de marcas
```

### Mobile-First Design
```css
/* Mobile (padrão) */
.product-grid {
  grid-template-columns: 1fr;
}

/* Tablet */
@media (min-width: 768px) {
  .product-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* Desktop */
@media (min-width: 1024px) {
  .product-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}
```

---

## 🚀 Como Usar/Demonstrar

### **Acesso ao Sistema**

#### Usuários de Teste Disponíveis:
```
Email: matheus@example.com    | Senha: senac123
Email: felipe@example.com     | Senha: senac123
Email: arthur@example.com     | Senha: senac123
... (7 usuários no total)
```

#### Links Importantes:
- 🏠 **Homepage**: http://localhost/
- 👤 **Login**: http://localhost/login
- 📝 **Registro**: http://localhost/cadastro
- 👨‍💼 **Admin**: http://localhost/adm-dashboard (protegido)
- 📋 **Produtos**: http://localhost/adm-produto (protegido)
- 👥 **Usuários**: http://localhost/adm-usuarios (protegido)

---

## 💡 Conceitos Técnicos Demonstrados

| Conceito | O Que É | Onde Está |
|----------|---------|----------|
| **MVC** | Model-View-Controller | Controllers, Models, Views |
| **ORM** | Object-Relational Mapping | Eloquent (Models) |
| **Middleware** | Filtro de requisições | Routes com `->middleware('auth')` |
| **Route Groups** | Agrupamento de rotas | `Route::prefix('adm')->group()` |
| **Blade Inheritance** | Template engine | `@extends`, `@include`, `@yield` |
| **Hash/Bcrypt** | Criptografia de senha | User model, factories |
| **Form Validation** | Validação server-side | Controllers |
| **Eloquent** | Query builder | ProductController, AdminController |

---

## 📊 Estatísticas Finais

```
📦 Arquivos de Código
├── Controllers:        3
├── Models:             2
├── Views:              13 blade files
├── Partials:           5 componentes reutilizáveis
├── CSS Files:          6 arquivos organizados
├── JavaScript:         3 scripts modulares
└── Routes:             15 rotas definidas

🔒 Segurança
├── CSRF Tokens:        ✅ Em todos os formulários
├── Password Hashing:   ✅ Bcrypt
├── Input Validation:   ✅ Server-side
├── Auth Middleware:    ✅ Protege admin
└── SQL Injection:      ✅ Eloquent ORM previne

📱 Frontend
├── Responsividade:     ✅ Mobile-first design
├── Acessibilidade:     ✅ HTML semântico
├── Performance:        ✅ CSS otimizado
└── Usabilidade:        ✅ Menu intuitivo
```

---

## 🎓 Aprendizados Demonstrados

### ✅ Backend (PHP/Laravel)
- Estrutura MVC profissional
- Eloquent ORM para dados
- Validação e segurança
- Autenticação e autorização
- Middleware
- Migrations e Seeders

### ✅ Frontend (HTML/CSS/JS)
- HTML semântico
- CSS responsivo (mobile-first)
- JavaScript para interatividade
- Blade templating
- Componentes reutilizáveis

### ✅ Banco de Dados
- Tabelas relacionais (SQL)
- Models Eloquent
- Factories para testes
- Estrutura normalizada

### ✅ Engenharia de Software
- DRY (Don't Repeat Yourself)
- Separação de responsabilidades
- Código limpo e legível
- Versionamento Git

---

## 📝 Pontos-Chave para Mencionar

1. **"Seguimos o padrão MVC profissional"** → Controller → Model → View
2. **"Implementamos segurança em múltiplas camadas"** → CSRF, Hash, Validação, Middleware
3. **"O código é reutilizável"** → Partials, Layouts, Componentes CSS
4. **"O design é responsivo"** → Funciona em mobile, tablet e desktop
5. **"Implementamos CRUD completo"** → Create, Read, Update, Delete para produtos
6. **"Autenticação segura"** → Bcrypt para senhas, Middleware para proteção

---

## ⏱️ Sequência Sugerida para Apresentação

1. **(1 min)** Visão geral do projeto
2. **(2 min)** Demonstrar funcionalidades públicas (Homepage, Filtros)
3. **(2 min)** Demonstrar autenticação (Registrar, Login)
4. **(5 min)** Demonstrar admin (Dashboard, CRUD, Usuários)
5. **(3 min)** Explicar arquitetura (MVC, Controllers, Models)
6. **(2 min)** Demonstrar código (Validação, Segurança)
7. **(1 min)** Responder perguntas

**Total: ~16 minutos** ✅

---

## 🎯 Perguntas Esperadas (Possíveis Respostas)

**P: Como você protege as rotas admin?**  
R: Usamos middleware `->middleware('auth')` que verifica se o usuário está autenticado. Se não estiver, redireciona para login.

**P: Como as senhas são armazenadas?**  
R: Usamos Bcrypt, que é uma função de hash forte. Não armazenamos a senha em texto plano.

**P: Por que separar em Controllers, Models e Views?**  
R: O padrão MVC facilita manutenção. Cada arquivo tem responsabilidade única.

**P: Como o carrinho funciona?**  
R: Armazenamos em localStorage (JavaScript) no cliente. Em produção, seria no banco.

**P: O que é Blade?**  
R: É o template engine do Laravel que permite herança, includes e sintaxe PHP limpa.

---

## 📚 Glossário de Termos Técnicos

### **Siglas e Conceitos**

| Termo | Significado | O Que Faz | Exemplo |
|-------|-------------|----------|---------|
| **MVC** | Model-View-Controller | Separa a aplicação em 3 partes: dados (Model), apresentação (View) e lógica (Controller) | Um formulário de login usa: LoginController (controla), User (dados), login.blade (exibe) |
| **CSRF** | Cross-Site Request Forgery | Ataque web onde alguém faz requisições indesejadas em nome do usuário | Laravel adiciona `@csrf` nos formulários para bloquear isso |
| **ORM** | Object-Relational Mapping | Permite tratar registros do banco como objetos da linguagem | Em vez de `SELECT * FROM users`, usamos `User::all()` |
| **HTML** | HyperText Markup Language | Linguagem para criar a estrutura de páginas web | `<button>Clique</button>` cria um botão |
| **CSS** | Cascading Style Sheets | Linguagem para estilizar elementos HTML | `color: blue;` deixa o texto azul |
| **PHP** | Hypertext Preprocessor | Linguagem de programação para backend | Roda no servidor antes de enviar para o navegador |
| **SQL** | Structured Query Language | Linguagem para gerenciar banco de dados | `SELECT * FROM products WHERE price > 100` busca produtos caros |
| **API** | Application Programming Interface | Interface que permite aplicações se comunicarem | `GET /api/products` retorna lista de produtos em JSON |
| **JSON** | JavaScript Object Notation | Formato de dados leve e legível | `{"name": "João", "age": 25}` |
| **Middleware** | Software intermediário | Filtro que processa requisições antes de chegar ao controlador | Middleware 'auth' verifica se usuário está logado |
| **Hash/Bcrypt** | Criptografia | Transforma uma senha legível em código irreversível | `senac123` vira `$2y$10$a1b2c3d4e5f6g7h8i9j0k1` |
| **Eloquent** | Query Builder do Laravel | Ferramenta para interagir com banco de dados usando objetos | `Product::find(1)` busca produto com ID 1 |
| **Blade** | Template Engine do Laravel | Sistema para criar views HTML com PHP limpo | `@foreach($products as $product)` lista produtos |
| **Factory** | Gerador de dados de teste | Cria dados fictícios para testes | `UserFactory::create()` cria usuário falso |
| **Seeder** | Alimentador de banco | Script que insere dados iniciais no banco | `DatabaseSeeder::run()` insere produtos e usuários padrão |
| **Route** | Rota | URL que a aplicação reconhece | `/feminino` → ProductController@feminino |
| **Controller** | Controlador | Arquivo que recebe requisição e decide o que fazer | ProductController processa cliques em categorias |
| **Model** | Modelo | Arquivo que representa tabela do banco | User model = tabela users |
| **View** | Visão | Arquivo HTML que o usuário vê | feminino.blade.php mostra produtos femininos |
| **Migration** | Migração | Script que cria/modifica tabelas no banco | Cria tabela 'users' com colunas id, name, email |
| **Timestamp** | Marca temporal | Data e hora de criação/atualização de registro | created_at: 2025-12-05 14:30:00 |
| **Responsive** | Responsivo | Design que se adapta a diferentes tamanhos de tela | Site funciona em mobile, tablet e desktop |

---

### **Termos de Interface/Frontend**

| Termo | Significado | Visual |
|-------|-------------|--------|
| **Dropdown Menu** | Menu suspenso | Menu que abre ao clicar (▼ seta) |
| **Input Field** | Campo de entrada | Caixa de texto para usuário digitar |
| **Button** | Botão | Elemento clicável que dispara ação |
| **Grid** | Grade | Layout em colunas (ex: 4 produtos por linha) |
| **Card** | Cartão | Caixa com informações (foto + descrição de produto) |
| **Breadcrumb** | Caminho de navegação | "Início > Categoria > Produto" mostra onde está |
| **Sidebar** | Barra lateral | Painel com filtros ou menu no lado da página |
| **Modal** | Janela flutuante | Popup que aparece sobre o conteúdo |
| **Form** | Formulário | Conjunto de campos para enviar dados (login, cadastro) |
| **Placeholder** | Texto indicativo | Texto cinzento que desaparece ao digitar |
| **Icon** | Ícone | Símbolo pequeno (lupa, carrinho, perfil) |
| **Badge** | Etiqueta | Número/texto pequeno (contador de carrinho) |
| **Tooltip** | Dica ao passar mouse | Texto que aparece ao passar mouse |
| **Toggle** | Interruptor | Botão on/off para ativar/desativar |
| **Pagination** | Paginação | Números de página para navegar (1, 2, 3...) |

---

### **Termos de Segurança**

| Termo | Significado | Como Funciona |
|-------|-------------|---------------|
| **Autenticação** | Verificação de identidade | Sistema confirma: "Você é quem diz ser?" (login) |
| **Autorização** | Permissão de acesso | Sistema confirma: "Você tem permissão?" (admin ou user) |
| **Token** | Chave de segurança | Código único que prova legitimidade (CSRF token) |
| **SQL Injection** | Ataque de banco de dados | Hacker insere comandos SQL maliciosos em campos |
| **Input Sanitization** | Limpeza de entrada | Remover caracteres perigosos dos dados do usuário |
| **Server-side Validation** | Validação no servidor | Verificar dados no backend (mais seguro que frontend) |
| **Password Hashing** | Criptografia de senha | Transformar senha em código irreversível |
| **HTTPS** | Protocolo seguro | Comunicação criptografada entre cliente e servidor |

---

### **Termos de Banco de Dados**

| Termo | Significado | Exemplo |
|-------|-------------|---------|
| **Tabela** | Estrutura como planilha | Tabela 'users' com colunas name, email, password |
| **Coluna** | Campo da tabela | Coluna 'email' armazena endereços de email |
| **Linha/Registro** | Dados de um item | Uma linha com dados de um usuário específico |
| **Primary Key** | Chave primária | ID único de cada registro (não pode repetir) |
| **Foreign Key** | Chave estrangeira | ID que aponta para registro em outra tabela |
| **Relacionamento** | Conexão entre tabelas | User tem muitos Orders (1 para muitos) |
| **Query** | Consulta | Pedido para buscar/modificar dados |
| **Index** | Índice | Otimização para buscas mais rápidas |
| **Backup** | Cópia de segurança | Cópia dos dados para recuperar se houver problema |
| **Migrate** | Migrar | Executar script que cria/modifica estrutura do banco |

---

### **Termos de Desenvolvimento**

| Termo | Significado | Uso |
|-------|-------------|-----|
| **Framework** | Estrutura pronta | Laravel é um framework PHP (não precisa criar do zero) |
| **Library** | Biblioteca | Coleção de funções prontas (ex: Bootstrap para CSS) |
| **Package** | Pacote | Código reutilizável instalável (via Composer) |
| **Dependency** | Dependência | Código que outro código precisa para funcionar |
| **Version Control** | Controle de versão | Git registra todas as mudanças de código |
| **Repository** | Repositório | Pasta que guarda código com histórico Git |
| **Branch** | Ramo | Cópia do código para trabalhar isoladamente |
| **Commit** | Confirmação | Salvar mudanças no Git com mensagem |
| **Deploy** | Implantação | Colocar código em servidor de produção |
| **Debug** | Depuração | Encontrar e corrigir erros no código |
| **Production** | Produção | Servidor onde usuários reais acessam |
| **Staging** | Testes | Servidor intermediário antes de produção |
| **Development** | Desenvolvimento | Ambiente de trabalho do programador |
| **Code Review** | Revisão de código | Outro programador verifica seu código |
| **DRY** | Don't Repeat Yourself | Não repetir código, usar componentes reutilizáveis |

---

### **Termos de Frontend**

| Termo | Significado | Exemplo |
|-------|-------------|---------|
| **Client-side** | No lado do cliente | JavaScript executado no navegador do usuário |
| **Server-side** | No lado do servidor | PHP executado no servidor antes de enviar |
| **DOM** | Document Object Model | Estrutura de elementos HTML que JavaScript pode modificar |
| **Event Listener** | Ouvinte de evento | Código que detecta cliques, digitação, etc |
| **AJAX** | Requisição assíncrona | Enviar/receber dados sem recarregar página |
| **Async** | Assíncrono | Operação que não bloqueia outras operações |
| **Callback** | Função de retorno | Função executada depois que algo termina |
| **Promise** | Promessa | Resultado futuro de operação assíncrona |
| **Selector** | Seletor | Forma de encontrar elemento HTML (ID, classe, tag) |
| **Attribute** | Atributo | Propriedade de elemento HTML (`<a href="...">`) |

---

### **Exemplos Práticos**

#### **Exemplo 1: Fluxo MVC - Buscar Produtos**
```
1. USUÁRIO clica em "Feminino"
   ↓
2. VIEW (feminino.blade.php) envia requisição para:
   ↓
3. CONTROLLER (ProductController@feminino) que:
   - Recebe a requisição
   - Chama o MODEL para buscar dados
   ↓
4. MODEL (Product) consulta banco:
   - SELECT * FROM products WHERE category = 'feminino'
   ↓
5. MODEL retorna dados ao CONTROLLER
   ↓
6. CONTROLLER passa dados à VIEW
   ↓
7. VIEW renderiza HTML bonito
   ↓
8. USUÁRIO vê produtos femininos na tela
```

#### **Exemplo 2: Segurança - Login**
```
1. USUÁRIO digita email e senha no formulário
   ↓
2. FORM envia dados com @csrf (token de segurança)
   ↓
3. SERVER-SIDE VALIDATION verifica:
   ✓ Email é válido?
   ✓ Senha tem mínimo 6 caracteres?
   ✓ Email existe no banco?
   ↓
4. PASSWORD HASHING compara:
   - Senha digitada → bcrypt → compara com hash no banco
   ↓
5. MIDDLEWARE AUTH cria sessão:
   - Usuário recebe cookie para próximas requisições
   ↓
6. USUÁRIO acessa painel admin protegido
```

#### **Exemplo 3: Responsividade - CSS Grid**
```
MOBILE (tela pequena):
┌─────────────┐
│  Produto 1  │
├─────────────┤
│  Produto 2  │
├─────────────┤
│  Produto 3  │
└─────────────┘
(1 coluna)

TABLET (tela média):
┌──────────┬──────────┐
│ Produto  │ Produto  │
├──────────┼──────────┤
│ Produto  │ Produto  │
└──────────┴──────────┘
(2 colunas)

DESKTOP (tela grande):
┌───────┬───────┬───────┬───────┐
│Prod 1 │Prod 2 │Prod 3 │Prod 4 │
├───────┼───────┼───────┼───────┤
│Prod 5 │Prod 6 │Prod 7 │Prod 8 │
└───────┴───────┴───────┴───────┘
(4 colunas)
```

---

## ✨ Conclusão

Este projeto demonstra:
- ✅ Conhecimento de framework moderno (Laravel 11)
- ✅ Boas práticas de segurança
- ✅ Arquitetura profissional (MVC)
- ✅ Code quality e organização
- ✅ Full-stack development (Backend + Frontend)
- ✅ Responsividade e UX

**Status**: Pronto para produção educacional 🚀
