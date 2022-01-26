FROM php:8.0-fpm-alpine

WORKDIR /var/www/app

RUN docker-php-ext-install pdo pdo_mysql \
    && apk --no-cache add nodejs npm

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Change current user to root
USER root

RUN chmod 777 -R /var/www/app