FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
RUN apt-get update && apt-get install apt-file -y && apt-file update && apt-get install vim -y
RUN apk add apache2-utils
RUN a2enmod rewrite