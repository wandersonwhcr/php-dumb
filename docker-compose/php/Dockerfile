ARG PHP_VERSION

FROM php:${PHP_VERSION}-cli-alpine

COPY --from=composer/composer:2.8 /usr/bin/composer /usr/local/bin/composer

VOLUME /app

WORKDIR /app
