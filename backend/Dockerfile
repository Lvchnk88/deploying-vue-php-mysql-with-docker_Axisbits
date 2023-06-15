FROM php:fpm-alpine
RUN apk add --no-cache $PHPIZE_DEPS oniguruma-dev libzip-dev curl-dev \
    && docker-php-ext-install pdo_mysql mbstring zip curl \
    && pecl install xdebug redis \
    && docker-php-ext-enable xdebug redis
RUN mkdir /app
VOLUME /app
WORKDIR /app
EXPOSE 8080
RUN chmod +x artisan
CMD php artisan serve --host=0.0.0.0 --port=8080

# FROM php:7.4-cli
# RUN mkdir /app
# VOLUME /app
# WORKDIR /app
# COPY . /app
# EXPOSE 8080
# RUN composer create-project laravel/laravel . 4.2 --prefer-dist
# RUN cd laravel
# CMD [ "php", "./index.php" ]

