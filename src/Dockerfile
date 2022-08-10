FROM php:7.4-fpm-alpine

RUN apk update --no-cache \
&& apk add \
icu-dev \
oniguruma-dev \
tzdata  \
bash \
libzip-dev \
libxml2-dev \
libcurl

RUN apk upgrade
RUN apk add curl

RUN docker-php-ext-install intl

RUN docker-php-ext-install pcntl

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install mbstring

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN apk add --no-cache pcre-dev $PHPIZE_DEPS \
        && pecl install redis \
        && docker-php-ext-enable redis.so

CMD ["php-fpm"]