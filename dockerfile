FROM php:8.1-fpm

# Instalar dependências e extensões do PHP
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Copiar arquivos da aplicação
COPY . /var/www

# Definir diretório de trabalho
WORKDIR /var/www


# Copie o conteúdo do projeto
COPY . /var/www

# Instale as dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Permissão para o diretório de armazenamento
RUN chown -R www-data:www-data /var/www/storage

# Expõe a porta
EXPOSE 9000

CMD ["php-fpm"]
