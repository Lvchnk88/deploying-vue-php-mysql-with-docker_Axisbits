FROM php:fpm-alpine
RUN apk add --no-cache $PHPIZE_DEPS linux-headers oniguruma-dev libzip-dev curl-dev composer \
    && docker-php-ext-install pdo_mysql mbstring zip curl \
    && pecl install xdebug redis \
    && docker-php-ext-enable xdebug redis
RUN mkdir /app
COPY index.php /app
WORKDIR /app
EXPOSE 9000
RUN composer require slim/slim "^4.0"
CMD php -S localhost:9000