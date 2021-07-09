FROM alpine:3.12

RUN apk update && apk add nginx openssl openssh supervisor
RUN adduser -D tcassia
RUN echo "tcassia:aaa" | chpasswd
RUN mkdir -p /run/nginx
RUN ssh-keygen -A
RUN openssl req -subj '/CN=localhost' -x509 -newkey rsa:4096 -nodes -keyout etc/nginx/conf.d/localhost.key -out etc/nginx/conf.d/localhost.crt -days 365
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY tcassia.conf /etc/nginx/conf.d/default.conf
EXPOSE 80 443 22
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"] 