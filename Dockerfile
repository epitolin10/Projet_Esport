FROM php:8.2-apache

# Installation des dépendances système
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    nodejs \
    npm

# Nettoyage du cache apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installation des extensions PHP requises (PostgreSQL inclus pour Render)
RUN docker-php-ext-install pdo_pgsql pdo_mysql mbstring exif pcntl bcmath gd

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuration du répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers du projet
COPY . /var/www/html

# Installation des dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Installation des dépendances JS et build des assets (Vite)
RUN npm install && npm run build

# Permissions pour les dossiers de stockage Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Activation du module rewrite d'Apache pour Laravel
RUN a2enmod rewrite

# Configuration du DocumentRoot Apache vers le dossier public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Port exposé (Render utilise la variable PORT, mais 80 est le défaut interne d'Apache)
EXPOSE 80

# Commande de démarrage (Migrations + Lancement Apache)
# Note: Sur Render, il vaut mieux lancer les migrations via une commande séparée ou un script, 
# mais pour simplifier ici, on lance Apache directement.
CMD ["apache2-foreground"]
