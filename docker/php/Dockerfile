FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    git unzip \
    libpng-dev \
    libzip-dev \
    libonig-dev

RUN docker-php-ext-install pdo_mysql mbstring exif bcmath gd

RUN pecl install redis && docker-php-ext-enable redis

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
