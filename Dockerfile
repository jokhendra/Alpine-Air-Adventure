# Build stage for Node.js assets
FROM node:18-alpine as node-builder

WORKDIR /app

# Copy package files first to leverage Docker cache
COPY package*.json ./

# Install dependencies with verbose output
RUN npm install --verbose

# Copy source files
COPY . .

# Build assets with verbose output and ensure manifest is created
RUN npm run build --verbose && \
    ls -la public/build/ && \
    cat public/build/manifest.json

# PHP application stage
FROM php:8.2-fpm-alpine

# Install system dependencies with progress indicator
RUN apk add --no-cache --progress \
    linux-headers \
    bash \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    oniguruma-dev

# Clear cache
RUN apk cache clean

# Install PHP extensions one by one to better handle failures
RUN docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mbstring && \
    docker-php-ext-install exif && \
    docker-php-ext-install pcntl && \
    docker-php-ext-install bcmath && \
    docker-php-ext-install gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . .

# Copy built assets from node-builder (including manifest)
COPY --from=node-builder /app/public/build /var/www/public/build

# Verify manifest exists
RUN ls -la /var/www/public/build/ && \
    cat /var/www/public/build/manifest.json

# Install composer dependencies with memory limit
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader --no-interaction --verbose

# Create storage directory structure
RUN mkdir -p /var/www/storage/framework/{sessions,views,cache} \
    && mkdir -p /var/www/storage/logs \
    && mkdir -p /var/www/bootstrap/cache

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/public/build

# Generate optimized files
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Create storage link
RUN php artisan storage:link

# Copy and setup start script
COPY start.sh /var/www/start.sh
RUN chmod +x /var/www/start.sh

# Set environment variables
ENV PHP_INI_SCAN_DIR=/usr/local/etc/php/conf.d
ENV PHP_INI_DIR=/usr/local/etc/php
ENV PHP_ERROR_REPORTING=E_ALL
ENV PHP_DISPLAY_ERRORS=1
ENV PHP_LOG_ERRORS=1
ENV PHP_ERROR_LOG=/var/www/storage/logs/php_errors.log
ENV COMPOSER_MEMORY_LIMIT=-1

# Expose port
EXPOSE 8000

# Start the application using the startup script
CMD ["/var/www/start.sh"] 