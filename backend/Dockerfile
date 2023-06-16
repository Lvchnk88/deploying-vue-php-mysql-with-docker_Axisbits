FROM php:8.0-apache
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql
COPY app/list_databases.php /var/www/html
COPY app/my-api.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
EXPOSE 80