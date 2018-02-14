<?php 


function dd($data) {
	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
}

function Legal($age) 
	{
		$age = $_GET['age']; //gets string from ur
	
		if ($age >= 21)
			{
				echo 'You are allowed into our fantastic nightclub';
			}
		else 
			{
				echo 'You are not allowed, please go away';
			}
	}

Function connectToDb()
	{
		$dsn ='mysql:dbname=mytodo;host=127.0.0.1';
		$user = 'root';
		$password = '';

		try {
			return new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
			die('Connection Failed.');
		}
	}

function fetchAllTasks($pdo)
	{
		$statement = $pdo->prepare('select * from todos');

		$statement ->execute();

		return $statement->fetchALL(PDO::FETCH_CLASS, 'Task');
	}
