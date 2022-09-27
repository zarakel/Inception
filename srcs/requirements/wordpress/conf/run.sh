#!/bin/sh

/usr/local/bin/wp	--info
/usr/local/bin/wp	core download --allow-root --path="/var/www/html"

rm			-f /var/www/html/wp-config.php
cp			./wp-config.php /var/www/html/wp-config.php

/usr/local/bin/wp	core install --allow-root --path="/var/www/html" \
			--url=${WP_HOST} --title=${WP_TITLE} \
			--admin_user=${WP_ADMIN_USER} --admin_password=${WP_ADMIN_PW} \
			--admin_email=${WP_ADMIN_EMAIL} --skip-email

/usr/local/bin/wp	user create --allow-root --path="/var/www/html" \
			${WP_USER} ${WP_EMAIL} --role=author --user_pass=${WP_PW}

exec	php-fpm7 -F
