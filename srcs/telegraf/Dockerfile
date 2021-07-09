FROM alpine:3.12

RUN apk update && apk upgrade
ADD https://dl.influxdata.com/telegraf/releases/telegraf-1.16.3_static_linux_amd64.tar.gz ./
RUN tar xf telegraf-1.16.3_static_linux_amd64.tar.gz
RUN rm telegraf-1.16.3_static_linux_amd64.tar.gz
RUN mv telegraf-1.16.3 telegraf
COPY telegraf.conf /etc/telegraf/
COPY start.sh /
RUN chmod +x start.sh
CMD ["./start.sh"]