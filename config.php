<?php

return [

	'db_connection' => 'pgsql:host=localhost',
	'db_charset_mysql' => 'utf8',
    'db_charset_pg' => '--client_encoding=UTF8',
	'db_name' => 'php',
	'db_user' => 'bart',
	'db_password' => 'aaa123',
	'db_options' => [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
	]
];