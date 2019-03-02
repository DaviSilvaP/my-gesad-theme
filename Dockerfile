FROM wordpress:latest
ADD --chown=www-data:www-data gesad-theme /var/www/html/wp-content/themes/gesad-theme
RUN chown -R www-data:www-data /var/www/html/wp-content
