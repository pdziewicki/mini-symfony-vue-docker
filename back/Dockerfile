FROM php:8.3-fpm-alpine AS base

WORKDIR /var/www/back

FROM base AS builder

COPY --from=composer:2.7 /usr/bin/composer /usr/local/bin/composer
COPY . .

RUN COMPOSER_ALLOW_SUPERUSER=1 composer install

FROM base AS runner

RUN apk --no-cache add postgresql-dev  \
 && docker-php-ext-install pdo_pgsql
#  \
#  && apk del postgresql-dev

COPY --from=builder /var/www/back .
