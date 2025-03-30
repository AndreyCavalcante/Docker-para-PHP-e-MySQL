FROM php:8.2-apache

# Instalar extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos da aplicação
COPY ./src /var/www/html

# Criar diretório de logs e configurar permissões corretamente
RUN mkdir -p /var/www/html/logs && \
    chown -R www-data:www-data /var/www/html/logs && \
    chmod -R 777 /var/www/html/logs

# Configurar logs do Apache
RUN ln -sf /dev/stdout /var/log/apache2/access.log && \
    ln -sf /dev/stderr /var/log/apache2/error.log

# Copiar a configuração personalizada do PHP
COPY ./docker/php.ini /usr/local/etc/php/conf.d/custom.ini

# Copiar a configuração do Apache
COPY ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf

# Ativar o site configurado
RUN a2ensite 000-default.conf

# Instalar Composer de forma segura
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expor porta do Apache
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
