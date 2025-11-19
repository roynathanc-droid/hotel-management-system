# Use official PHP image with Apache
FROM php:8.2-apache

# Install required system dependencies
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libzip-dev zip curl \
    && docker-php-ext-install pdo pdo_mysql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project into container
COPY . /var/www/html

# Set Apache DocumentRoot to Laravel's public folder
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
# Copy .env into container
COPY .env /var/www/html/.env

