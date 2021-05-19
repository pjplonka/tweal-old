FROM php:8-apache

WORKDIR /var/www/html

ADD . /var/www/html

COPY docker/php-dev.ini /usr/local/etc/php/php.ini

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
