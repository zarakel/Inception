F&P		= -f srcs/docker-compose.yml -p inception
#ENV_FILE	= srcs/.env

all: 
		mkdir -p /home/jbuan/data/wordpress
		mkdir -p /home/jbuan/data/db
		docker-compose ${F&P} up -d --build

start:
		docker-compose ${F&P} start

stop:
		docker-compose ${F&P} stop


clean:
		rm -Rf /home/jbuan/data/wordpress
		rm -Rf /home/jbuan/data/db

fclean: clean
		docker rmi -f mariadb nginx wordpress
		docker rm -f mariadb nginx wordpress
		docker volume rm -f inception_db inception_wordpress
		docker network rm inception 
		docker system prune -af

re: stop fclean all

.PHONY: all start stop status fclean clean re
