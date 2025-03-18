#!/bin/sh

echo "Starting Alpine Air Adventure deployment process..."

# Check PHP version
echo "PHP Version:"
php -v

# Check if .env exists
if [ ! -f .env ]; then
    echo "Error: .env file not found!"
    exit 1
else
    echo "✅ .env file found"
fi

# Display environment variables (without sensitive data)
echo "Checking environment variables..."
php artisan env

# Clear all caches
echo "Clearing Laravel caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Check storage permissions
echo "Checking storage permissions..."
chmod -R 775 storage bootstrap/cache
ls -la storage/
ls -la bootstrap/cache/

# Test database connection with detailed logging
echo "Testing database connection..."
php artisan db:test-connection

# Check Laravel configuration
echo "Checking Laravel configuration..."
php artisan --version

# Create storage link if it doesn't exist
echo "Creating storage link..."
php artisan storage:link --force

# Start the application with error reporting
echo "Starting Laravel application..."
echo "Server will be available at http://0.0.0.0:8000"

# Enable query logging for local environment
if [ "$APP_ENV" = "local" ]; then
    echo "Enabling SQL query logging for local environment..."
    export QUERY_LOG=true
fi

# Start the server with logging
php artisan serve --host=0.0.0.0 --port=8000 --verbose