FROM alpine:3.12

RUN apk update && apk upgrade 
RUN apk add wget
RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk
RUN apk add glibc-2.32-r0.apk
RUN wget https://s3-us-west-2.amazonaws.com/grafana-releases/release/grafana-5.0.4.linux-x64.tar.gz
RUN tar zxvf grafana-5.0.4.linux-x64.tar.gz
RUN mv grafana-5.0.4 grafana
RUN mv grafana /etc/
COPY start.sh /
COPY dashboard.yaml /etc/grafana/conf/provisioning/dashboards/
COPY influxdb.yaml /etc/grafana/conf/provisioning/datasources/
COPY grafana.ini /etc/grafana/conf/
COPY /dashboards/* /var/lib/grafana/dashboards/
RUN chmod +x start.sh
EXPOSE 3000
CMD ["./start.sh"]