# Étape 1 : Utiliser PHP avec Apache
FROM php:8.2-apache

# Étape 2 : Installer Composer
RUN apt-get update && apt-get install -y curl git unzip && \
    curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Étape 3 : Installer les extensions nécessaires à Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Étape 4 : Activer le module rewrite
RUN a2enmod rewrite

# Étape 5 : Copier les fichiers du projet
COPY . /var/www/html

# Étape 6 : Définir le dossier de travail
WORKDIR /var/www/html

# Étape 7 : Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Étape 8 : Configurer Apache pour pointer vers /public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf && \
    echo "<Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>" > /etc/apache2/conf-available/laravel.conf && \
    a2enconf laravel

# Étape 9 : Donner les permissions nécessaires
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html/storage

# Étape 10 : Exposer le port HTTP
EXPOSE 80

# Étape 11 : Lancer Apache
CMD ["apache2-foreground"]
