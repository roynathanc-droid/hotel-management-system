#!/bin/bash

# Laravel Production Deployment Script for Render
echo "Starting Laravel deployment..."

# Install dependencies
echo "Installing dependencies..."
composer install --no-dev --optimize-autoloader

# Clear and cache configuration
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force

# Set proper permissions
echo "Setting permissions..."
chmod -R 775 storage bootstrap/cache

echo "Deployment completed successfully!"