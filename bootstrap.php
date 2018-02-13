<?php

$config = require 'config.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
	connection::make($config['database'])
);