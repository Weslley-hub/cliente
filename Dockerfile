FROM php:7.4-apache

# Instala o driver PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql pgsql

# Copia a configuração do Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Reinicia o serviço Apache
RUN service apache2 restart