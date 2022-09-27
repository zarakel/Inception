<?php
	define("DB_NAME",			getenv("DB_DATABASE"));
	define("DB_USER",			getenv("DB_USER"));
	define("DB_PASSWORD",			getenv("DB_PW"));
	define("DB_HOST",			getenv("WP_DB_HOST") . ":3306");
	define("DB_CHARSET",			getenv("DB_CHARSET"));
	define("DB_COLLATE",			getenv("DB_COLLATE"));

	define('AUTH_KEY',			'0U&:Xwro?9UZ4_-bc*U^c{>njqX`SOj(u~nBH&;zl*rV#^%( 5L4@8G|9qK@scWn');
	define('SECURE_AUTH_KEY', 		 '}PXv0c?GdMOe>>MCk=!h[KSe2 -TSMEHf6B^;V)p.Sbs{X9#z*rOfnGS)+x[L?!6');
	define('LOGGED_IN_KEY',    		'o-}uC&MOU6xp8|)Qr<EzBpQ+=QO&gX3Os#NjO}./B<o%?1=D:u+1`W&<wWCgWb5Q');
	define('NONCE_KEY',        		'T|3`--qA&{a:&Kau|2,ulNkna`6uVE-t6>RUFcH|EK`2iAk0B9MO+*nzI#Q%y/|l');
	define('AUTH_SALT',        		'F[ $c|VXR8q^yb^2D)bm8eF:FlBzQBYt$]SPOckzM$RReXrG9gAMeU%-EKaV2,gF');
	define('SECURE_AUTH_SALT', 		'MO$><ZV-btLrDALzN{IKXA,?NWjR7,u6>H4nPPWt0eG[QKC!i19(317~+!GO/;sl');
	define('LOGGED_IN_SALT',   		'/AP``ZrV#VD6vV<7]Rjg(>whx0@V)}|,|~=2p*c)d,B$=&PK1{wKo2tp] E-HjAA');
	define('NONCE_SALT',       		' `>Ffqpaf-2!Gz9U95zDVJlQFwjFq55:M{Z7._T;q)e#/<%V<z!=L6EC7)/lwom|');	
	define("CONCATENATE_SCRIPTS",	false);

	$table_prefix =				wp_;

	define("WP_DEBUG", true);
	if (!defined("ABSPATH"))
		define("ABSPATH", __DIR__ . "/");

	require_once ABSPATH . "wp-settings.php";
