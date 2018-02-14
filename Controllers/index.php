<?php
// require 'functions.php';
// require 'task.php';



$tasks = $database->selectAll('todos');


require 'views/index.view.php