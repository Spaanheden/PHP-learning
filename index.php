<?php
// require 'functions.php';
// require 'task.php';


require 'core/bootstrap.php';

Require Router::load('routes.php')
	->direct(Request::uri());