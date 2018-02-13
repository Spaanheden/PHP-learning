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