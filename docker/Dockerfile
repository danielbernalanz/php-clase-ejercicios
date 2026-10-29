ARG DEBIAN-FRONTEND=noninteractive
FROM php:8.5.12-apache

RUN echo "<Directory /var/www/html>" >> /etc/apache2/sites-enabled/000-default.conf
RUN echo "Options Indexes" >> /etc/apache2/sites-enabled/000-default.conf
RUN echo "</Directory>" >> /etc/apache2/sites-enabled/000-default.conf

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

VOLUME /var/www/html
EXPOSE 80

