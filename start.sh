#!/bin/sh

# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Check storage permissions
chmod -R 775 storage bootstrap/cache

# Check if .env exists
if [ ! -f .env ]; then
    echo "Error: .env file not found!"
    exit 1
fi

# Check Laravel configuration
php artisan --version
php artisan env

# Start the application with error reporting
php artisan serve --host=0.0.0.0 --port=8000 --verbose 