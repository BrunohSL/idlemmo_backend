FROM php:7.3-fpm-alpine
# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# lumen packages
RUN docker-php-ext-install mbstring tokenizer mysqli pdo_mysql