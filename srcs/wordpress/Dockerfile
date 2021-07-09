FROM alpine:3.12

RUN apk update && apk upgrade 
RUN apk add nginx openssl wget supervisor \
php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-json \
php7-opcache php7-gd php7-session php7-mbstring

RUN mkdir -p /run/nginx
RUN mkdir -p /var/www/tcassia

RUN wget http://wordpress.org/latest.tar.gz && tar xfvz latest.tar.gz && rm latest.tar.gz
RUN mv wordpress /var/www/tcassia/

RUN openssl req -subj '/CN=localhost' -x509 -newkey rsa:4096 -nodes -keyout etc/nginx/conf.d/localhost.key -out etc/nginx/conf.d/localhost.crt -days 365
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY wp-config.php /var/www/tcassia/wordpress/
COPY tcassia.conf /etc/nginx/conf.d/default.conf

EXPOSE 5050

CMD ["/usr/bin/supervisord", "-c", "etc/supervisor/conf.d/supervisord.conf"]
