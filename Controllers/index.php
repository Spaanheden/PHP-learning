<?php
// require 'functions.php';
// require 'task.php';



$tasks = $app['database']->selectAll('todos');

require 'views/index.view.php';