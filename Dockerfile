# Utilisation de l'image PHP avec FPM
FROM php:8.2-fpm

# Installer les dépendances de base
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copier Composer depuis l'image Composer officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installer Node.js 20.x et npm
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier tous les fichiers du projet dans le conteneur
COPY . .

# Installer les dépendances PHP avec Composer
RUN composer install --no-dev --optimize-autoloader

# Installer les dépendances front-end avec npm
RUN npm install

# Compiler les assets front-end avec Vite
RUN npm run build

# Exécuter les migrations Laravel
RUN php artisan migrate --force

# Changer les permissions pour les dossiers nécessaires
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Exposer le port 8000 pour le serveur PHP
EXPOSE 8000

# Démarrer le serveur Laravel avec Artisan
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
