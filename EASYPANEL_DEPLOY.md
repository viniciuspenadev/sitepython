# 🚀 Guia de Deploy - Easypanel

## ❌ Problema: 404 Not Found

**Erro**: `404 Not Found - nginx/1.18.0 (Ubuntu)`

### 🔍 Causas Possíveis

1. **Arquivos no diretório errado**
2. **Configuração do Easypanel incorreta**
3. **Faltando arquivo de configuração**

---

## ✅ Solução: Passo a Passo

### Opção 1: Deploy via Git (Recomendado)

#### 1️⃣ Configurar Repositório Git

```bash
# No diretório local (sitepython/)
git init
git add index.php servicos_*.php includes/ assets/ Dockerfile .htaccess
git commit -m "Initial production deployment"
```

#### 2️⃣ Conectar ao GitHub/GitLab

```bash
# Criar repositório no GitHub primeiro, depois:
git remote add origin https://github.com/seu-usuario/sitepython.git
git branch -M main
git push -u origin main
```

#### 3️⃣ Configurar no Easypanel

1. Acesse o Easypanel
2. Clique em **"Create Service"**
3. Selecione **"Git Repository"**
4. Cole a URL do repositório
5. **Branch**: `main`
6. **Build Command**: (deixe vazio ou use `echo "No build needed"`)
7. **Start Command**: (deixe vazio - o Dockerfile cuida disso)
8. **Port**: `80`
9. **Root Directory**: `/` (ou deixe vazio)

#### 4️⃣ Variáveis de Ambiente (se necessário)

Adicione no Easypanel:
- `DOCUMENT_ROOT=/var/www/html`

---

### Opção 2: Deploy via Upload Direto

Se você fez upload direto dos arquivos:

#### 1️⃣ Verificar Estrutura de Pastas

No Easypanel, verifique se os arquivos estão em:
```
/app/
├── index.php
├── servicos_aereo.php
├── servicos_maritimo.php
├── includes/
└── assets/
```

**OU**

```
/var/www/html/
├── index.php
├── servicos_aereo.php
├── servicos_maritimo.php
├── includes/
└── assets/
```

#### 2️⃣ Configurar o "Start Directory"

No Easypanel:
1. Vá em **Settings** > **General**
2. Em **"Document Root"** ou **"Public Path"**, coloque: `/`
3. Salve e reinicie o serviço

---

### Opção 3: Usar Docker Compose

Crie um arquivo `docker-compose.yml`:

```yaml
version: '3.8'

services:
  web:
    build: .
    ports:
      - "80:80"
    volumes:
      - ./:/var/www/html
    restart: unless-stopped
```

No Easypanel:
1. Faça upload do `docker-compose.yml`
2. Use a opção **"Docker Compose"**

---

## 🔧 Checklist de Configuração Easypanel

### Configurações Básicas

- [ ] **Service Type**: PHP Application ou Docker
- [ ] **Port**: 80
- [ ] **Environment**: Production
- [ ] **Root Path**: `/` ou `/var/www/html`

### Arquivos Necessários no Root

- [ ] ✅ `index.php` (arquivo principal)
- [ ] ✅ `Dockerfile` (para build Docker)
- [ ] ✅ `.htaccess` (configuração Apache)
- [ ] ✅ `nginx.conf` (se usar nginx)

### Estrutura de Pastas

```
seu-projeto/
├── Dockerfile          ← IMPORTANTE!
├── .htaccess
├── nginx.conf
├── index.php
├── servicos_aereo.php
├── servicos_maritimo.php
├── includes/
│   └── navbar.php
└── assets/
    ├── images/
    ├── css/
    ├── js/
    └── fonts/
```

---

## 🐛 Debugging

### 1. Verificar Logs no Easypanel

```bash
# No terminal do Easypanel:
tail -f /var/log/nginx/error.log
tail -f /var/log/nginx/access.log
```

### 2. Verificar se o PHP está funcionando

Crie um arquivo `info.php` temporário:

```php
<?php
phpinfo();
?>
```

Acesse: `https://seu-dominio.com/info.php`

**⚠️ DELETE depois de testar!**

### 3. Verificar permissões

```bash
# No terminal SSH do Easypanel:
ls -la /var/www/html/
# Deve mostrar: www-data como owner

# Se necessário, corrigir:
chown -R www-data:www-data /var/www/html/
chmod -R 755 /var/www/html/
```

---

## 🎯 Configuração Específica do Easypanel

### Se estiver usando o "App Platform" do Easypanel:

1. **Tipo de Aplicação**: Selecione **"PHP"**
2. **Versão do PHP**: 8.1 ou superior
3. **Web Server**: Apache (recomendado) ou Nginx
4. **Document Root**: deixe como `/` ou configure como `/public` se tiver
5. **Index File**: `index.php`

### Se estiver usando "Docker Service":

Use o `Dockerfile` que criamos:

```dockerfile
FROM php:8.1-apache
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]
```

---

## 🔄 Rebuildar o Serviço

Depois de fazer alterações:

1. No Easypanel, vá até seu serviço
2. Clique em **"Rebuild"** ou **"Restart"**
3. Aguarde o deploy completar
4. Teste: `https://seu-dominio.com/`

---

## 📝 Domínio Personalizado

Se estiver usando domínio próprio:

1. No Easypanel: **Settings** > **Domains**
2. Adicione seu domínio: `pythonlogistics.com`
3. Configure DNS:
   ```
   Tipo: A
   Nome: @
   Valor: [IP do Easypanel]
   
   Tipo: CNAME
   Nome: www
   Valor: seu-app.easypanel.host
   ```
4. Ative **SSL/HTTPS** (Let's Encrypt - automático no Easypanel)

---

## ⚡ Solução Rápida

**Se nada funcionar, tente isto:**

1. Delete o serviço atual no Easypanel
2. Crie um novo serviço
3. Use o template **"PHP Application"**
4. Faça upload APENAS destes arquivos na ordem:
   ```
   1. Dockerfile
   2. index.php
   3. servicos_aereo.php
   4. servicos_maritimo.php
   5. includes/ (pasta completa)
   6. assets/ (pasta completa)
   ```
5. Configure:
   - Port: 80
   - Build: Auto
6. Deploy!

---

## 🆘 Ainda com erro?

### Me envie estas informações:

1. **URL do erro**: `https://seu-dominio.com/`
2. **Screenshot** do painel do Easypanel mostrando as configurações
3. **Logs de erro** (copie do terminal/logs do Easypanel)
4. **Estrutura de arquivos** que você subiu

---

## ✅ Teste Final

Quando funcionar, teste:

- [ ] `https://seu-dominio.com/` → Deve carregar index.php
- [ ] `https://seu-dominio.com/servicos_aereo.php` → Deve carregar
- [ ] `https://seu-dominio.com/?lang=pt` → Português
- [ ] `https://seu-dominio.com/?lang=en` → Inglês
- [ ] Imagens carregam?
- [ ] Menu funciona?

**Pronto! 🎉**
