# Use the official PHP with Apache image as a base
FROM php:8.1-apache

# Set the ServerName in Apache configuration
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
  \
  # Update and install dependencies
  && apt-get update \
  && apt-get install -y --no-install-recommends \
     locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev unzip \
  \
  # Set up locales
  && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen  \
  && echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen \
  && locale-gen \
  \
  # Install Composer
  && curl -sS https://getcomposer.org/installer | php -- \
  && mv composer.phar /usr/local/bin/composer \
  \
  # Install Node.js and npm
  && curl -sL https://deb.nodesource.com/setup_18.x | bash - \
  && apt-get install -y nodejs \
  \
  # Install Symfony CLI
  && curl -sS https://get.symfony.com/cli/installer | bash \
  && mv /root/.symfony5/bin/symfony /usr/local/bin \
  \ 
  # Configure and install PHP extensions
  && docker-php-ext-configure \
     intl \
  && docker-php-ext-install \
     pdo pdo_mysql opcache intl zip calendar dom mbstring gd xsl \
  \
  # Install APCu extension
  && pecl install apcu \
  && docker-php-ext-enable apcu

# Set the working directory to /var/www/
WORKDIR /var/www/
