FROM		alpine:3.15.6

RUN		apk update && apk upgrade && apk add openrc

RUN		apk add mariadb mariadb-common mariadb-client mariadb-server-utils

RUN		rm -f	/etc/mysql/my.cnf /etc/my.cnf ~/my.cnf

COPY		conf/db.conf /etc/mysql/my.cnf
COPY		conf/db.conf /etc/my.cnf
COPY		conf/db.conf ~/my.cnf

RUN		mkdir -p /run/mysqld
RUN		mkdir -p /var/lib/mysql

RUN		chown -R mysql /var/lib/mysql
RUN		chmod 777 /var/lib/mysql

COPY		conf/run.sh run.sh
RUN		chmod +x run.sh
ENTRYPOINT	["./run.sh"]

EXPOSE		3306

