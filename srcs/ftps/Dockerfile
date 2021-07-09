FROM alpine:3.12

RUN apk update && apk add vsftpd openssl
RUN adduser -D tcassia
RUN echo "tcassia:aaa" | chpasswd
EXPOSE 20 21 1036
RUN openssl req -subj '/CN=localhost' -x509 -newkey rsa:4096 -nodes -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt -days 365
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY start.sh /
RUN chmod +x start.sh
CMD ["./start.sh"]