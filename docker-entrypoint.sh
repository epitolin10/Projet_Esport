#!/bin/bash
set -e

# Helper: log with timestamp
log() {
  echo "[$(date -u '+%Y-%m-%dT%H:%M:%SZ')] $*"
}

# Wait for DB to be ready (uses DB_HOST and DB_PORT; defaults for Postgres)
DB_HOST="${DB_HOST:-${DB_HOST:-127.0.0.1}}"
DB_PORT="${DB_PORT:-${DB_PORT:-5432}}"

log "Waiting for database ${DB_HOST}:${DB_PORT} to be reachable..."
# loop until tcp port is open
retries=0
max_retries=60
until bash -c "echo > /dev/tcp/${DB_HOST}/${DB_PORT}" >/dev/null 2>&1; do
  sleep 1
  retries=$((retries + 1))
  if [ "$retries" -ge "$max_retries" ]; then
    log "ERROR: database ${DB_HOST}:${DB_PORT} still not reachable after ${max_retries}s."
    # Show env var useful for debug
    env | grep -E 'DB_|DATABASE_URL|APP_URL' || true
    exit 1
  fi
done
log "Database is reachable."

# Cache config/routes/views to pickup env correctly
log "Caching config, routes and views..."
php artisan config:cache || log "config:cache failed"
php artisan route:cache || log "route:cache failed"
php artisan view:cache || log "view:cache failed"

# Run migrations
log "Running migrations..."
if [ "${FORCE_MIGRATE:-false}" = "true" ]; then
  php artisan migrate:fresh --seed --force
else
  php artisan migrate --force
fi

# Run seeders once: use a marker file so we don't reseed on every restart
SEED_MARKER="storage/.seeded_by_render"
if [ ! -f "$SEED_MARKER" ]; then
  log "Running database seeders..."
  if php artisan db:seed --force; then
    log "Seeders completed. Creating marker $SEED_MARKER"
    touch "$SEED_MARKER"
    chown www-data:www-data "$SEED_MARKER" || true
  else
    log "Seeders failed. See output above."
    exit 1
  fi
else
  log "Seed marker present, skipping seeders."
fi

# Start Apache
log "Starting Apache..."
exec apache2-foreground
