# Étape 1 : Utiliser PHP avec Apache
FROM php:8.2-apache

# Étape 2 : Installer les extensions nécessaires à Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Étape 3 : Activer le module rewrite (routes Laravel)
RUN a2enmod rewrite

# Étape 4 : Copier les fichiers du projet dans le conteneur
COPY . /var/www/html

# Étape 5 : Définir le dossier de travail
WORKDIR /var/www/html

# Étape 6 : Configurer Apache pour pointer vers /public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf && \
    echo "<Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>" > /etc/apache2/conf-available/laravel.conf && \
    a2enconf laravel

# Étape 7 : Donner les permissions nécessaires à Laravel
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html/storage

# Étape 8 : Exposer le port HTTP
EXPOSE 80

# Étape 9 : Démarrer Apache
CMD ["apache2-foreground"]
