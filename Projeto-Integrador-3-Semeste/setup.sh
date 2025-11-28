#!/usr/bin/env bash
set -euo pipefail

# Script simples de setup para desenvolvimento
# Executar a partir da raiz do projeto:
#   ./setup.sh

PROJECT_DIR="$(cd "$(dirname "$0")" && pwd)"
cd "$PROJECT_DIR"

echo "-> Iniciando setup do projeto em: $PROJECT_DIR"

require_cmd() {
  if ! command -v "$1" >/dev/null 2>&1; then
    echo "ERRO: comando '$1' não encontrado. Instale-o e rode este script novamente." >&2
    exit 1
  fi
}

echo "-> Verificando dependências básicas..."
require_cmd php
require_cmd composer

if [ -f package.json ]; then
  echo "-> Package.json detectado; verificando npm..."
  if command -v npm >/dev/null 2>&1; then
    NPM_PRESENT=true
  else
    NPM_PRESENT=false
    echo "Aviso: 'npm' não encontrado. Pulei instalação de JS."
  fi
fi

echo "-> Instalando dependências PHP (composer)..."
composer install --no-interaction --prefer-dist

# .env
if [ ! -f .env ]; then
  echo "-> Criando .env a partir de .env.example"
  if [ -f .env.example ]; then
    cp .env.example .env
  else
    echo "Aviso: .env.example não encontrado. Crie um .env manualmente." >&2
  fi
else
  echo "-> .env já existe; preservando."
fi

echo "-> Gerando APP_KEY se necessário..."
if grep -q '^APP_KEY=' .env; then
  KEY_VAL=$(grep '^APP_KEY=' .env | cut -d'=' -f2-)
  if [ -z "$KEY_VAL" ]; then
    php artisan key:generate
  else
    echo "-> APP_KEY já definido."
  fi
else
  php artisan key:generate
fi

echo "-> Criando arquivo sqlite (database/database.sqlite) se aplicável..."
mkdir -p database
touch database/database.sqlite || true
chown --quiet "$(whoami)":"$(whoami)" database/database.sqlite || true

echo "-> Limpando cache de configuração e otimizando autoload..."
php artisan config:clear || true
php artisan route:clear || true
php artisan view:clear || true

echo "-> Rodando migrations (sem interação)..."
php artisan migrate --force || true

if [ -f package.json ] && [ "${NPM_PRESENT:-false}" = true ]; then
  echo "-> Instalando dependências JS (npm)..."
  npm install
  echo "-> (Opcional) Rode 'npm run dev' ou 'npm run build' conforme necessidade."
fi

echo "-> Criando link simbólico de storage (se necessário)..."
php artisan storage:link || true

echo "-> Setup concluído. Para iniciar o servidor de desenvolvimento, execute:"
echo "   php artisan serve --host=127.0.0.1 --port=8000"

exit 0
