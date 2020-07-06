FROM ctftraining/base_image_nginx_mysql_php_73
COPY src /var/www/html
COPY 36d_CTF.sql /db.sql
COPY flag.sh /flag.sh

RUN chown -R www-data:www-data /var/www/html \
    && cp -f /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini \
    && sed -i 's/skip-network/#skip-network/' /etc/my.cnf.d/mariadb-server.cnf

