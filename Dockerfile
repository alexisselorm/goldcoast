# Use the official PHP image with required extensions
FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Copy existing application
COPY . /var/www

# Set permissions
RUN chown -R www-data:www-data /var/www

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
