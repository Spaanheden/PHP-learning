<?php


require 'config.php';
class Connection
{
	
	public static function make($config)
	{

		try
		{
			return new PDO(
				$config['dsn'],
				$config['user'],
				$config['password'],
				$config['options']
			);
		}
		catch (PDOException $e) 
		{
			die('Connection Failed.');
		}
	}

}

