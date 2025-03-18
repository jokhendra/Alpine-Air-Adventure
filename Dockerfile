FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy composer files first to leverage Docker cache
COPY composer.json composer.lock ./

# Install composer dependencies
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Copy the rest of the application
COPY . .

# Generate application key if not set
RUN php artisan key:generate --force

# Cache configuration
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Create storage symlink
RUN php artisan storage:link

# Expose port
EXPOSE 8000

# Create startup script with database connection test
RUN echo '#!/bin/sh\n\
echo "🚀 Starting Alpine Air Adventure..."\n\
\n\
echo "📝 Caching configurations..."\n\
php artisan config:cache\n\
\n\
echo "🔍 Testing database connection..."\n\
php artisan db:monitor\n\
\n\
if [ $? -eq 0 ]; then\n\
    echo "✅ Database connection successful!"\n\
    echo "🔄 Running migrations..."\n\
    php artisan migrate --force\n\
else\n\
    echo "❌ Database connection failed!"\n\
    echo "Database Host: $DB_HOST"\n\
    echo "Database Port: $DB_PORT"\n\
    echo "Database Name: $DB_DATABASE"\n\
    echo "Database User: $DB_USERNAME"\n\
    exit 1\n\
fi\n\
\n\
echo "🌐 Starting server..."\n\
php artisan serve --host=0.0.0.0 --port=$PORT\n'\
> /usr/local/bin/start.sh && \
chmod +x /usr/local/bin/start.sh

# Create database monitor command
RUN echo '<?php\n\
\n\
namespace App\\Console\\Commands;\n\
\n\
use Illuminate\\Console\\Command;\n\
use Illuminate\\Support\\Facades\\DB;\n\
use PDO;\n\
use PDOException;\n\
\n\
class DatabaseMonitor extends Command\n\
{\n\
    protected $signature = "db:monitor";\n\
    protected $description = "Monitor database connection";\n\
\n\
    public function handle()\n\
    {\n\
        try {\n\
            DB::connection()->getPDO();\n\
            $dbName = DB::connection()->getDatabaseName();\n\
            $this->info("✅ Connected successfully to database: {$dbName}");\n\
            return Command::SUCCESS;\n\
        } catch (\\Exception $e) {\n\
            $this->error("❌ Database connection failed!");\n\
            $this->error("Error: " . $e->getMessage());\n\
            $this->error("Code: " . $e->getCode());\n\
            return Command::FAILURE;\n\
        }\n\
    }\n\
}\n'\
> /var/www/app/Console/Commands/DatabaseMonitor.php

# Start command
CMD ["/usr/local/bin/start.sh"] 