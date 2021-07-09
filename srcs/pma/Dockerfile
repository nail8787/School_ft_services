FROM alpine:3.12

RUN apk update && apk upgrade 
RUN apk add nginx openssl wget supervisor \
php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-json \
php7-opcache php7-gd php7-session php7-mbstring

RUN mkdir -p /run/nginx
RUN mkdir -p /var/www/tcassia

RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz 
RUN tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz 
RUN rm phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages phpmyadmin
RUN mv phpmyadmin /var/www/tcassia

COPY config.inc.php /var/www/tcassia/phpmyadmin/
COPY tcassia.conf /etc/nginx/conf.d/default.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
RUN openssl req -subj '/CN=localhost' -x509 -newkey rsa:4096 -nodes \
-keyout etc/nginx/conf.d/localhost.key -out etc/nginx/conf.d/localhost.crt -days 365

EXPOSE 5000

CMD ["/usr/bin/supervisord", "-c", "etc/supervisor/conf.d/supervisord.conf"]