<?php
require 'functions.php';
require 'Connection.php';
require 'task.php';



$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);


require 'index.view.php';