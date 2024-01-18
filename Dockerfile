FROM php:8.0-fpm

# Actualizar paquetes e instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
        libpng-dev \
        libonig-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libzip-dev \
        unzip \
        git \
        curl

# Limpiar caché de apt
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Configurar e instalar extensiones de PHP necesarias para Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl gd zip

RUN pecl install redis \
    && docker-php-ext-enable redis

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer directorio de trabajo
WORKDIR /var/www

# Exponer puerto 9000 y ejecutar php-fpm
EXPOSE 9000
CMD ["php-fpm"]
