FROM php:7.4-apache
RUN apt-get update && apt-get install  -y git 
RUN apt-get install -y libxml2-dev
RUN docker-php-ext-install soap
COPY php.ini /usr/local/etc/php/php.ini
WORKDIR /var/www/html
RUN git clone https://github.com/jvalentfuentezuelas/servicio.git
