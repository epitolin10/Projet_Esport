#!/bin/bash
set -e

# Mise en cache de la configuration, des routes et des vues
# On le fait au démarrage pour prendre en compte les variables d'environnement de Render
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Exécution des migrations
echo "Running migrations..."
php artisan migrate --force

# Démarrage d'Apache
echo "Starting Apache..."
exec apache2-foreground
