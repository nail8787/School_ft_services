#!/bin/sh
openrc default
/etc/init.d/mariadb setup
rc-service mariadb start
rc-update add mariadb default
mysql -u root < init.sql
mysql -u root mysql_db < mysql_db.sql
rc-service mariadb stop
/usr/bin/mysqld_safe