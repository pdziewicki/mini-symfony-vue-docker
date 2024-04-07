FROM php:8.3-fpm-alpine AS builder

WORKDIR /var/www/app

COPY --from=composer:2.7 /usr/bin/composer /usr/local/bin/composer
COPY . .

RUN COMPOSER_ALLOW_SUPERUSER=1 composer install

FROM php:8.3-fpm-alpine AS runner

WORKDIR /var/www/app

COPY --from=builder /var/www/app .
