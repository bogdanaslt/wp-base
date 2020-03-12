FROM php:7.2-fpm

RUN apt update
RUN apt install -y libxml2-dev libpng-dev unzip

RUN docker-php-ext-install gd zip pdo pdo_mysql mysqli xml mbstring

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv /var/www/html/composer.phar /bin/composer