# Utiliser l'image PHP 8.2 avec Apache
FROM php:8.2-apache

# Installer les extensions PHP nécessaires à Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Activer le module rewrite d’Apache (obligatoire pour Laravel routes)
RUN a2enmod rewrite

# Copier tous les fichiers du projet dans le dossier du serveur
COPY . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Changer la configuration d'Apache pour pointer vers /public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Donner les permissions nécessaires
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Exposer le port HTTP
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
