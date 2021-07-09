FROM alpine:3.12

RUN apk update && apk add openrc mariadb mariadb-common mariadb-client
#MariaDB
RUN mkdir -p /run/openrc
COPY my.cnf /etc/
COPY init.sql /
COPY mysql_db.sql /
COPY start.sh /
RUN chmod +x start.sh
RUN chmod +x init.sql
EXPOSE 3306

CMD ["./start.sh"]