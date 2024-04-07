FROM php:8.3-fpm-alpine AS base

WORKDIR /var/www/app

FROM base AS builder

COPY --from=composer:2.7 /usr/bin/composer /usr/local/bin/composer
COPY . .

RUN COMPOSER_ALLOW_SUPERUSER=1 composer install

FROM base AS runner

COPY --from=builder /var/www/app .
