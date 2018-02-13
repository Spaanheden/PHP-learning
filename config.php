<?php


return [
	'database' => [
		'dsn' => 'mysql:dbname=mytodo;host=127.0.0.1',
		'user' => 'root',
		'password' => '',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]

	]



];