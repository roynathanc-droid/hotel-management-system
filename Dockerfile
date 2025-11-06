# Utiliser PHP 8.2 avec Apache
FROM php:8.2-apache

# Installer les extensions nécessaires pour Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Copier les fichiers du projet
COPY . /var/www/html

# Définir le dossier de travail
WORKDIR /var/www/html

# Exposer le port
EXPOSE 80
