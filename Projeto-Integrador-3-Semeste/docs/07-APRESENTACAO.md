# 📚 Guia de Apresentação - Elegance Joias

## O Projeto

E-commerce de joias desenvolvido em **Laravel 11** com enfoque em:
- Arquitetura limpa e bem organizada
- Uso de padrões de design (MVC, DRY)
- Banco de dados relacional
- Autenticação e autorização
- Responsividade e UX

---

## 🏗️ Arquitetura

### Controllers
**`app/Http/Controllers/`**
- **ProductController**: Listagem, filtros e detalhes de produtos
- **AuthController**: Login, registro e logout
- **AdminController**: CRUD de produtos e usuários

### Models
**`app/Models/`**
- **Product**: Catálogo de produtos (nome, preço, categoria, estoque)
- **User**: Usuários do sistema (nome, email, autenticação)

### Views
**`resources/views/`**
- **Layouts**: `app.blade.php` (público), `admin.blade.php` (admin)
- **Partials**: Componentes reutilizáveis (header, footer, contato)
- **Pages**: Todas as páginas herdam dos layouts

---

## 🎯 Funcionalidades Principais

### Público
✅ Visualizar produtos por categoria (feminino/masculino)  
✅ Buscar e filtrar por marca  
✅ Ver detalhes do produto  
✅ Adicionar ao carrinho  

### Autenticação
✅ Registrar nova conta  
✅ Login com validação  
✅ Perfil de usuário  
✅ Menu dropdown com logout  

### Administrativo (Protegido)
✅ Dashboard com estatísticas  
✅ CRUD de produtos (criar, editar, deletar)  
✅ Gestão de usuários  
✅ Listagem com paginação  

---

## 📊 Banco de Dados

```
users
├── id
├── name
├── email
└── password

products
├── id
├── name
├── description
├── price
├── category (feminino/masculino)
├── brand
├── stock
└── timestamps
```

---

## 🔐 Segurança Implementada

- **CSRF Protection**: Tokens em todos os formulários
- **Password Hashing**: Bcrypt para senhas
- **Middleware Auth**: Rotas protegidas por autenticação
- **Input Validation**: Validação server-side em Controllers
- **SQL Injection Protection**: Uso de Eloquent ORM

---

## 📁 Estrutura de Pastas

```
projeto/
├── app/
│   ├── Http/Controllers/      ← Lógica da aplicação
│   └── Models/                ← Modelos de dados
├── resources/
│   ├── views/
│   │   ├── layouts/           ← Layouts base
│   │   ├── partials/          ← Componentes
│   │   └── [páginas].blade    ← Páginas específicas
│   └── css/
├── routes/
│   └── web.php                ← Definição de rotas
├── database/
│   └── migrations/            ← Schema do BD
└── config/                    ← Configurações
```

---

## 🚀 Rotas da Aplicação

```php
// Públicas
GET  /                      → ProductController@index
GET  /feminino              → ProductController@feminino
GET  /masculino             → ProductController@masculino
GET  /produto/{id}          → ProductController@show

// Autenticação
GET  /login                 → AuthController@showLogin
POST /login                 → AuthController@login
GET  /cadastro              → AuthController@showRegister
POST /cadastro              → AuthController@register
POST /logout                → AuthController@logout

// Admin (Protegidas com middleware 'auth')
GET  /adm/dashboard         → AdminController@dashboard
GET  /adm/produtos          → AdminController@products
POST /adm/produtos          → AdminController@storeProduct
GET  /adm/produtos/{id}/editar → AdminController@editProduct
PUT  /adm/produtos/{id}     → AdminController@updateProduct
```

---

## 💡 Conceitos Demonstrados

### Laravel
- [x] Controllers com lógica de negócio
- [x] Models com Eloquent ORM
- [x] Rotas com resource e middleware
- [x] Validação de input
- [x] Tratamento de exceções
- [x] Migrations para schema
- [x] Blade templates com herança

### PHP
- [x] Programação orientada a objetos
- [x] Namespaces
- [x] Type hinting
- [x] Composição de objetos

### HTML/CSS
- [x] Responsive design
- [x] Atomic design patterns
- [x] Formulários semânticos
- [x] Acessibilidade básica

### JavaScript
- [x] DOM manipulation
- [x] Event listeners
- [x] Validação client-side
- [x] Async operations

---

## 🎓 Diferenciais do Projeto

✨ **Código Limpo**
- Sem comentários óbvios
- Nomes descritivos
- Métodos pequenos e focados

✨ **Padrão MVC**
- Separação clara de responsabilidades
- Reutilização de componentes (DRY)
- Fácil manutenção e escalabilidade

✨ **UX Considerável**
- Interface intuitiva
- Feedback visual
- Formulários bem estruturados

✨ **Boas Práticas**
- CSRF protection
- Password hashing
- Input validation
- Error handling

---

## 🎬 Demo no Terminal

```bash
# Iniciar servidor
php artisan serve

# Acessar
http://localhost:8000

# Usuário teste (se existir)
Email: test@example.com
Senha: password
```

---

## 📝 Notas para Apresentação

1. **Explicar MVC**: Model (dados) → Controller (lógica) → View (apresentação)

2. **Destacar Security**: 
   - CSRF tokens
   - Password hashing
   - Middleware protection

3. **Mostrar Database**:
   - Relationships
   - Migrations

4. **Demonstrar Funcionalidades**:
   - Registrar usuário
   - Fazer login
   - Navegar produtos
   - Acessar admin (apenas admin)

5. **Mencionar Escalabilidade**:
   - Fácil adicionar novas funcionalidades
   - Cache de resultados
   - Possibilidade de API

---

**Desenvolvido com Laravel 11 | Blade | SQLite**
