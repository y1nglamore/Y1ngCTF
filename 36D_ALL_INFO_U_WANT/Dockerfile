FROM plr47/bjd_nginx_mysql_php_56

COPY src /var/www/html
COPY flag /flag
COPY real_flag /etc/opt/secret/what_you_want
COPY sleep.sh /var/opt/sleep.sh
RUN chmod -R 744 /var/opt/sleep.sh
RUN chmod -R 755 /var/www/html/ && \
	chmod -R 755 /etc/opt/secret/what_you_want && \
	chown -R root:root /var/www/html && \
	chown -R www-data:www-data /var/www/html/
CMD ["/bin/sh", "/var/opt/sleep.sh"]