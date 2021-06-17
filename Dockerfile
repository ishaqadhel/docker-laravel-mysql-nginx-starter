FROM php:7.4-fpm-alpine

WORKDIR /var/www/laraveldocker

RUN docker-php-ext-install pdo pdo_mysql

# Change current user to root
USER root

RUN chmod 777 -R /var/www/laraveldocker