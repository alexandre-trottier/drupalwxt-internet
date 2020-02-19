FROM php:7.3.0-apache

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libpq-dev \
        #For redirects
        libaprutil1-dbd-pgsql \
        --no-install-recommends openssh-server \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install opcache \
    && docker-php-ext-install pdo_pgsql \
    && a2enmod rewrite \
    && a2enmod proxy \
    && a2enmod proxy_http \
    && a2enmod ssl \
    #For redirects
    && a2enmod dbd \
    && curl -OL https://github.com/drush-ops/drush-launcher/releases/download/0.6.0/drush.phar \
    && chmod +x drush.phar \
    && mv drush.phar /usr/local/bin/drush \
    && echo "root:Docker!" | chpasswd

COPY ./docker/apache2/sites-available/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/sshd_config /etc/ssh/
COPY ./docker/init.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/init.sh

WORKDIR /var/www
COPY ./console console
COPY ./drush drush
COPY ./html html
COPY ./patches patches
COPY ./scripts scripts
COPY ./vendor vendor
COPY ./composer.json composer.json
RUN ln -s /home/files /var/www/html/sites/default/files \
    && ln -s /home/config /var/www/config

COPY ./docker/fix-permissions.sh /usr/local/fix-permissions.sh
RUN bash /usr/local/fix-permissions.sh --drupal_path=/var/www/html --drupal_user=root

WORKDIR /var/www/html

EXPOSE 80 2222

ENTRYPOINT ["init.sh"]