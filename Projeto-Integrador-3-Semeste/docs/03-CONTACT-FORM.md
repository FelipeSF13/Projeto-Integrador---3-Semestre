# 📋 Contact Form - Simulação de Envio

## 🎯 O Que Foi Implementado

O formulário de contato agora simula um envio bem-sucedido **sem sair da página**, com feedback visual profissional.

---

## ✨ Recursos

### 1. **Validação de Campos**
```javascript
✓ Verifica se email está preenchido
✓ Verifica se mensagem está preenchida
✓ Mostra alerta se campos vazios
```

### 2. **Animação de Envio**
```
Usuário clica "Enviar"
         ↓
Botão muda para "Enviando..." (desabilitado)
         ↓
Aguarda 1.5 segundos (simulando requisição)
         ↓
Formulário desaparece
```

### 3. **Mensagem de Sucesso**
```
Após envio:
  ✓ Ícone com animação scale-in
  ✓ Título: "Mensagem Enviada!"
  ✓ Descrição: "Obrigado por entrar em contato..."
  ✓ Animação slide-up de entrada
```

### 4. **Reset Automático**
```
Após 5 segundos:
  → Formulário reaparece
  → Mensagem desaparece
  → Botão volta ao normal
  → Usuário pode enviar novamente
```

---

## 📁 Arquivos Modificados/Criados

### ✅ Criados
```
public/js/contact-form.js           (Novo - Lógica JavaScript)
```

### ✅ Modificados
```
resources/views/partials/contact.blade.php
  └─ Form ID: "contact-form"
  └─ Button ID: "submit-btn"
  └─ Adicionado div#success-message
  └─ Removido atributo action (POST)

resources/views/layouts/app.blade.php
  └─ Adicionado: <script src="contact-form.js"></script>

resources/views/layouts/admin.blade.php
  └─ Adicionado: <script src="contact-form.js"></script>

public/css/atomic/organisms/_contact-section.css
  └─ Adicionado CSS para .success-message
  └─ Adicionado animações: slideUp, scaleIn
```

---

## 🎨 Animações CSS

### **Slide Up** (Entrada da mensagem)
```css
@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);  /* Começa 20px abaixo */
    }
    to {
        opacity: 1;
        transform: translateY(0);     /* Sobe suavemente */
    }
}
```
**Duração**: 0.4s | **Easing**: ease-out

### **Scale In** (Ícone de sucesso)
```css
@keyframes scaleIn {
    from {
        transform: scale(0);          /* Começa invisível */
        opacity: 0;
    }
    to {
        transform: scale(1);          /* Cresce até tamanho normal */
        opacity: 1;
    }
}
```
**Duração**: 0.5s | **Easing**: ease-out

---

## 🔄 Fluxo de Execução

```
1. DOMContentLoaded
   ↓
2. Seleciona elementos (form, success-message, button)
   ↓
3. Adiciona event listener ao formulário
   ↓
4. Usuário clica "Enviar"
   ↓
5. Previne comportamento padrão (POST)
   ↓
6. Valida campos (email, message)
   ↓
7. Se inválido → Mostra alerta
   ↓
8. Se válido → Desabilita botão + "Enviando..."
   ↓
9. setTimeout 1500ms (simula requisição)
   ↓
10. Limpa formulário (.reset())
    ↓
11. Oculta formulário (display: none)
    ↓
12. Mostra mensagem de sucesso
    ↓
13. Adiciona classe .show (trigger animação)
    ↓
14. setTimeout 5000ms
    ↓
15. Mostra formulário novamente
    ↓
16. Oculta mensagem de sucesso
    ↓
17. Remove classe .show
    ↓
18. Habilita botão + "Enviar"
    ↓
19. Pronto para novo envio
```

---

## 💻 Código JavaScript Detalhado

```javascript
// Aguarda carregar DOM
document.addEventListener('DOMContentLoaded', () => {
    // 1. Seleciona elementos
    const contactForm = document.getElementById('contact-form');
    const successMessage = document.getElementById('success-message');
    const submitBtn = document.getElementById('submit-btn');

    // 2. Se não houver formulário, sai
    if (!contactForm) return;

    // 3. Adiciona evento ao submit
    contactForm.addEventListener('submit', (e) => {
        // Previne POST padrão
        e.preventDefault();

        // 4. Captura valores
        const email = contactForm.querySelector('input[name="email"]').value;
        const message = contactForm.querySelector('input[name="message"]').value;

        // 5. Valida
        if (!email || !message) {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        // 6. Desabilita botão durante "envio"
        submitBtn.disabled = true;
        submitBtn.textContent = 'Enviando...';
        submitBtn.style.opacity = '0.6';

        // 7. Simula delay do servidor (1.5s)
        setTimeout(() => {
            // 8. Limpa formulário
            contactForm.reset();

            // 9. Transição visual
            contactForm.style.display = 'none';
            successMessage.style.display = 'block';
            successMessage.classList.add('show');

            // 10. Reset após 5 segundos
            setTimeout(() => {
                contactForm.style.display = 'block';
                successMessage.style.display = 'none';
                successMessage.classList.remove('show');

                submitBtn.disabled = false;
                submitBtn.textContent = 'Enviar';
                submitBtn.style.opacity = '1';
            }, 5000);
        }, 1500);
    });
});
```

---

## 🎯 Comportamento Esperado

### **Passo 1: Usuário acessa a página**
```
✓ Formulário visível
✓ Campos vazios
✓ Botão ativo ("Enviar")
```

### **Passo 2: Preenche e envia**
```
✓ Digita email: usuario@example.com
✓ Digita mensagem: "Olá, gostaria de saber..."
✓ Clica "Enviar"
```

### **Passo 3: Processamento (1.5s)**
```
✓ Botão muda para "Enviando..."
✓ Botão fica desabilitado (opacity: 0.6)
✓ Formulário ainda visível
```

### **Passo 4: Sucesso (instantâneo)**
```
✓ Formulário desaparece
✓ Mensagem de sucesso aparece com animação
✓ Ícone ✓ cresce (scale-in)
✓ Texto sobe suavemente (slide-up)
```

### **Passo 5: Aguarda (5s)**
```
✓ Mensagem permanece visível
✓ Usuário vê "Mensagem Enviada!"
✓ Lê "Obrigado por entrar em contato conosco. Responderemos em breve."
```

### **Passo 6: Reset (após 5s)**
```
✓ Mensagem desaparece
✓ Formulário reaparece
✓ Campos vazios (foram resetados)
✓ Botão volta ao normal ("Enviar")
✓ Pronto para novo envio
```

---

## 🧪 Como Testar

1. Acesse qualquer página com o formulário de contato
2. Deixe os campos vazios e clique "Enviar"
   - ✅ Deve mostrar alerta: "Por favor, preencha todos os campos."
3. Preencha email e mensagem
4. Clique "Enviar"
   - ✅ Botão muda para "Enviando..."
   - ✅ Após 1.5s, formulário desaparece
   - ✅ Mensagem de sucesso aparece com animações
5. Aguarde 5 segundos
   - ✅ Formulário reaparece limpo
   - ✅ Mensagem desaparece
   - ✅ Botão normal novamente

---

## 🔒 Notas de Segurança

**Atual**: Simulação no cliente (JavaScript)
- ✓ Feedback visual instantâneo
- ✓ Sem recarregar página
- ✗ Dados não são salvos (apenas simulado)

**Para Produção** (em breve):
```javascript
// Enviar dados realmente para servidor
fetch('/contact/send', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    },
    body: JSON.stringify({ email, message })
})
.then(response => response.json())
.then(data => {
    // Mostrar sucesso
})
.catch(error => {
    // Mostrar erro
});
```

---

## 📊 Fluxo Temporal

```
[0ms]     Usuário clica "Enviar"
├─ Validação
├─ Desabilita botão
│
[1500ms]  Simula requisição ao servidor
├─ Limpa form
├─ Oculta form
├─ Mostra success-message
├─ Trigger animações
│
[1500ms - 6500ms]  Exibe mensagem
│
[6500ms]  Reset automático
├─ Mostra form
├─ Oculta success-message
├─ Habilita botão
│
[6500ms+] Pronto para novo envio
```

---

## ✅ Status

**Implementado**: ✅ Completo  
**Testado**: ✅ Funcional  
**Pronto para uso**: ✅ Sim  

O formulário de contato agora oferece uma **experiência fluida e profissional** sem necessidade de recarregar a página! 🎉
