FROM php:8.0-apache
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql
COPY app/list_databases.php /var/www/html
COPY app/my-api.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
EXPOSE 80






# FROM php:fpm-alpine
# RUN apk add --no-cache $PHPIZE_DEPS linux-headers oniguruma-dev libzip-dev curl-dev composer \
#     && docker-php-ext-install pdo_mysql mbstring zip curl \
#     && pecl install xdebug redis \
#     && docker-php-ext-enable xdebug redis
# COPY index.php /var/www/html
# WORKDIR /var/www/html
# EXPOSE 9000
# RUN composer require slim/slim "^4.0"
# CMD php -S localhost:9000