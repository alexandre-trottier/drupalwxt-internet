FROM php:7.3.0-apache

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libpq-dev \
        #For redirects
        libaprutil1-dbd-pgsql \
        #git \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install opcache \
    && docker-php-ext-install pdo_pgsql \
    && a2enmod rewrite \
    && a2enmod proxy \
    && a2enmod proxy_http \
    && a2enmod ssl \
    #For redirects
    && a2enmod dbd \
    && service apache2 restart

COPY ./vendor /var/www/vendor
COPY ./html /var/www/html
COPY ./docker/apache2/sites-available/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY ./docker/php/conf.d/php.ini /usr/local/etc/php/conf.d/php.ini