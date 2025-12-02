#!/bin/bash
set -e

# Helper: log with timestamp
log() { echo "[$(date -u '+%Y-%m-%dT%H:%M:%SZ')] $*"; }

: "${PORT:=80}"

# Configuration Apache pour Render
sed -ri "s/Listen [0-9]+/Listen ${PORT}/" /etc/apache2/ports.conf || true
sed -ri "s/<VirtualHost \*:([0-9]+)>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf || true
sed -ri "s/VirtualHost \*:([0-9]+)/VirtualHost *:${PORT}/" /etc/apache2/apache2.conf || true

# Attente de la DB
DB_HOST="${DB_HOST:-127.0.0.1}"
DB_PORT="${DB_PORT:-5432}"
log "Waiting for database ${DB_HOST}:${DB_PORT}..."
retries=0
max_retries=60
until bash -c "echo > /dev/tcp/${DB_HOST}/${DB_PORT}" >/dev/null 2>&1; do
  sleep 1
  retries=$((retries+1))
  if [ "$retries" -ge "$max_retries" ]; then
    log "ERROR: database unreachable."
    exit 1
  fi
done

# Cache
php artisan config:cache
php artisan route:cache
php artisan view:cache

# --- ZONE DE RESET ---
# Au lieu de juste migrer, on fait un FRESH complet pour supprimer toutes les vieilles données
log "🔄 RESET COMPLET DE LA DB (Fresh + Seed)..."
php artisan migrate:fresh --seed --force
# ---------------------

log "Starting Apache on port ${PORT}..."
exec apache2-foreground
