# Build stage for Node.js assets
FROM node:18-alpine as node-builder

WORKDIR /app

# Copy package files
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy source files
COPY . .

# Build assets
RUN npm run build

# PHP application stage
FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
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

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . .

# Copy built assets from node-builder
COPY --from=node-builder /app/public/build /var/www/public/build

# Install composer dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Create storage directory structure
RUN mkdir -p /var/www/storage/framework/{sessions,views,cache} \
    && mkdir -p /var/www/storage/logs \
    && mkdir -p /var/www/bootstrap/cache

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage \
    && chmod -R 775 /var/www/bootstrap/cache

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

# Expose port
EXPOSE 8000

# Start the application using the startup script
CMD ["/var/www/start.sh"] 