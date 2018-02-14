<?php

$config = require 'config.php';
require 'core/Router.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';

return new QueryBuilder(
	connection::make($config['database'])
);