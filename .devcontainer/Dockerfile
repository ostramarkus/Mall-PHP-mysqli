# Bygg vidare på standard-PHP-devcontainer-image
FROM mcr.microsoft.com/devcontainers/php:8.3

RUN apt-get update \
  && apt-get install -y default-mysql-client \
  && docker-php-ext-install pdo_mysql \
  && rm -rf /var/lib/apt/lists/*
