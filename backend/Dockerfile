FROM php:8.0-apache

# Install PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql

# Copy application files to the container
COPY app/list_databases.php /var/www/html

# Set up Apache configuration
COPY app/my-api.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80