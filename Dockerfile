FROM php:8.0-apache

RUN apt-get update && apt-get install -y libxml2-dev && \
    docker-php-ext-install soap

RUN echo "DirectoryIndex soap-server.php" >> /etc/apache2/apache2.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY . /var/www/html/

WORKDIR /var/www/html

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000"]