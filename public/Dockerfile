# Gunakan image dasar PHP 8.2
FROM php:8.2-fpm

# Install dependensi yang dibutuhkan sistem dan ekstensi PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd xml

# Install Composer (dependency manager untuk PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set direktori kerja di dalam container
WORKDIR /var/www/html

# Salin file dependensi terlebih dahulu untuk caching
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader --no-dev

COPY package.json package-lock.json ./
RUN npm install

# Salin seluruh file aplikasi
COPY . .

# Jalankan build script dan optimasi Laravel
RUN composer dump-autoload --optimize
RUN npm run build
RUN php artisan key:generate --force
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Ubah kepemilikan file agar bisa ditulis oleh server
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port yang digunakan oleh aplikasi
EXPOSE 8000

# Perintah untuk menjalankan aplikasi
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]