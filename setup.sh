#!/bin/bash
minikube start --vm-driver=virtualbox
minikube addons enable metallb
eval $(minikube docker-env)

docker build -t nginx-image ./srcs/nginx
docker build -t pma-image ./srcs/pma
docker build -t wordpress-image ./srcs/wordpress
docker build -t mysql-image ./srcs/mysql
docker build -t ftps-image ./srcs/ftps
docker build -t influxdb-image ./srcs/influxdb
docker build -t telegraf-image ./srcs/telegraf
docker build -t grafana-image ./srcs/grafana
kubectl apply -f srcs/config.yaml
kubectl apply -f srcs/nginx.yaml
kubectl apply -f srcs/pma.yaml
kubectl apply -f srcs/wordpress.yaml
kubectl apply -f srcs/mysql.yaml
kubectl apply -f srcs/ftps.yaml
kubectl apply -f srcs/influxdb.yaml
kubectl apply -f srcs/telegraf.yaml
kubectl apply -f srcs/grafana.yaml