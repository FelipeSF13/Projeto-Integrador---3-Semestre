# Elegance Joias - E-commerce de Joalheria

Projeto integrador desenvolvido em **Laravel 11** com **Blade** para apresentação na faculdade.

## 📚 Documentação Completa

**Toda a documentação técnica está organizada em:** [`docs/`](./docs/)

### Índice Rápido:
1. [**Melhorias Finais**](./docs/01-MELHORIAS-FINAIS.md) - Resumo de imagens, responsividade e verificações
2. [**Verificação Auth/Admin**](./docs/02-VERIFICACAO-AUTH.md) - Documentação de segurança e funcionalidades
3. [**Formulário de Contato**](./docs/03-CONTACT-FORM.md) - Implementação e animações
4. [**Correções de Filtros**](./docs/04-FIXES.md) - Melhorias de UX
5. [**Guia do Professor**](./docs/05-PROFESSOR.md) - Documentação técnica completa + glossário
6. [**Checklist Apresentação**](./docs/06-CHECKLIST.md) - Guia pré-apresentação
7. [**Roteiro Apresentação**](./docs/07-APRESENTACAO.md) - Roteiro para demo

## 🎯 Sobre o Projeto

Sistema de e-commerce para venda de joias com:
- Catálogo de produtos (feminino e masculino)
- Autenticação de usuários
- Carrinho de compras
- Painel administrativo
- Gestão de produtos e usuários

## 🚀 Tecnologias

- **Framework**: Laravel 11
- **Banco de Dados**: SQLite
- **Template Engine**: Blade
- **CSS**: Atomic Design Pattern
- **Frontend**: JavaScript vanilla

## 📁 Estrutura Principal

```
app/
├── Http/Controllers/
│   ├── ProductController.php      # Listagem de produtos
│   ├── AuthController.php         # Login e cadastro
│   └── AdminController.php        # Painel administrativo
└── Models/
    ├── Product.php               # Modelo de produto
    └── User.php                  # Modelo de usuário

resources/
├── views/
│   ├── layouts/                  # Layouts principais
│   ├── partials/                 # Componentes reutilizáveis
│   └── [nomes-views].blade.php   # Views
└── css/
    ├── style.css                 # Estilos principais
    └── atomic/                   # Componentes atômicos

routes/
└── web.php                       # Rotas da aplicação
```

## 🔧 Instalação

```bash
# Clonar repositório
git clone <url>

# Instalar dependências
composer install

# Copiar arquivo de ambiente
cp .env.example .env

# Gerar chave da aplicação
php artisan key:generate

# Rodar migrações
php artisan migrate

# Iniciar servidor
php artisan serve
```

## 📍 Rotas Principais

| Rota | Descrição |
|------|-----------|
| `/` | Página inicial |
| `/feminino` | Produtos femininos |
| `/masculino` | Produtos masculinos |
| `/login` | Área de login |
| `/cadastro` | Registro de usuário |
| `/carrinho` | Carrinho de compras |
| `/pagamento` | Checkout |
| `/adm/dashboard` | Painel admin |

## 💾 Banco de Dados

### Tabelas
- **users** - Dados de usuários
- **products** - Catálogo de produtos
- **migrations** - Histórico de migrações

### Models
- `User` - Autenticação
- `Product` - Produtos do catálogo

## 🔒 Segurança

- CSRF tokens em formulários
- Hash de senhas com bcrypt
- Middleware de autenticação
- Validação server-side

## 👨‍💼 Autores

Desenvolvido para projeto integrador de desenvolvimento web.

---

**Status**: ✅ Concluído | **Versão**: 1.0

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
