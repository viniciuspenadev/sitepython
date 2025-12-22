FROM php:8.1-apache

# Habilitar mod_rewrite do Apache
RUN a2enmod rewrite

# Copiar arquivos do projeto
COPY . /var/www/html/

# Configurar permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expor porta 80
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
