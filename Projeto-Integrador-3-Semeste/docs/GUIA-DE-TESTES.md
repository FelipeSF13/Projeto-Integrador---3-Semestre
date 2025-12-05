# 🧪 Guia de Testes Rápido

## Para Testar o Projeto Completo

### 1️⃣ **Inicializar o Servidor**
```bash
cd /home/mathmendes/Documentos/SENAC/PI/3-SEMESTRE/Projeto-Integrador---3-Semestre/Projeto-Integrador-3-Semeste
php artisan migrate:fresh --seed
php artisan serve
```

Acesse: `http://localhost:8000`

---

### 2️⃣ **Testar Autenticação**

#### Cadastro
1. Clique em "Cadastro"
2. Preencha: Nome, Email, Senha, Confirmar Senha
3. Clique em "Cadastrar"
4. Verifique se redireciona para home

#### Login
1. Clique em "Login"
2. Insira: Email: `admin@test.com` | Senha: `password`
3. Clique em "Entrar"
4. Verifique se aparece menu do usuário

#### Admin Dashboard
1. Enquanto logado, clique no seu nome → "Painel Admin"
2. Verifique se carrega com tabela de produtos
3. Tente editar um produto (aumentar preço)
4. Tente deletar um produto

---

### 3️⃣ **Testar Filtros e Sorting**

#### Acessar Feminino
1. Clique em "Feminino" no menu
2. Verifique se aparecem 6 produtos com imagens

#### Filtros
1. **Categoria**: Clique em "Anéis" → deve mostrar apenas anéis
2. **Preço**: Arraste slider até R$2000 → deve filtrar
3. **Cor**: Clique em uma cor → deve filtrar (se houver)
4. **Marca**: Clique em "GUCCI" → deve mostrar só GUCCI

#### Sorting
1. Clique no dropdown "Mais popular"
2. Teste todas as opções:
   - Mais popular ✓
   - Mais novo ✓
   - Menor preço ✓
   - Maior preço ✓
   - A - Z ✓
   - Z - A ✓

#### Paginação
1. Vá para a 2ª página
2. Verifique se produtos mudam

---

### 4️⃣ **Testar Brands Bar**

1. Na homepage, procure pela "Brands Bar" (logo após banner)
2. Verifique se tem background preto e texto branco
3. Clique em uma marca (ex: VERSACE)
4. Deve redirecionar para `/feminino?brand=VERSACE`
5. Verifique se está filtrando corretamente

---

### 5️⃣ **Testar Produtos**

#### Detalhes do Produto
1. Clique em qualquer produto
2. Verifique se carrega imagem corretamente
3. Verifique seção de estoque:
   - Se **logado como admin**: "Estoque: X unidade(s)"
   - Se **não logado ou cliente**: "Status: ✓ Disponível"

#### Ver Mais (Index)
1. Volte para home
2. Na seção "Novidades", clique em "Ver mais"
3. Verifique se carregam mais produtos com imagens

---

### 6️⃣ **Testar Responsividade**

Abra Developer Tools (F12) e teste tamanhos:
- 📱 Mobile (375px): Tudo deve ser responsivo
- 📱 Tablet (768px): Layouts ajustar
- 🖥️ Desktop (1440px): Layout completo

---

## 🔴 Possíveis Erros e Soluções

| Erro | Solução |
|------|---------|
| Imagens não carregando | Verificar se estão em `public/img/` com nome exato |
| Sorting não funciona | Verificar se sort-select existe no HTML |
| Filtros perdendo dados | Limpar browser cache (Ctrl+Shift+Del) |
| JavaScript errors | Abrir Console (F12) e procurar por erros vermelhos |
| Login não funciona | Verificar se user existe no banco (admin@test.com) |

---

## 📊 Checklist Final

- [ ] Autenticação funcionando
- [ ] Produtos aparecendo com imagens
- [ ] Filtros funcionando
- [ ] Sorting funcionando (todas as 6 opções)
- [ ] Brands bar mostrando corretamente
- [ ] Admin dashboard acessível
- [ ] CRUD de produtos funcionando
- [ ] Estoque visível apenas para admin
- [ ] "Ver mais" carregando produtos
- [ ] Página responsiva em mobile

---

**Se todos os itens passarem no checklist, o projeto está pronto para apresentação! ✅**
