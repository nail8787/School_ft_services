FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add influxdb openrc
RUN mkdir -p /run/openrc
COPY influxdb.conf /etc/influxdb.conf
COPY start.sh /
RUN chmod +x start.sh
EXPOSE 8086

CMD ["./start.sh"]