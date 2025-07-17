ARG PHP_VERSION

FROM php:${PHP_VERSION}-cli-alpine

COPY --from=composer/composer:2.8 /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install pcov \
    && docker-php-ext-enable pcov \
    && apk del $PHPIZE_DEPS \
    && find /usr/src -type f -name 'php.tar*' -delete

VOLUME /app

WORKDIR /app
