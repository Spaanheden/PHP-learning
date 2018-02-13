<!DOCTYPE html>

<html lang="en">

<head>
	<Meta charset="UTF-8">
	<title>Document</title>

	<style>
		header {
			background: #BF1313;
			padding: 2em;
			text-align: center;			
		
		}

	</style>

</head>

<body>

	<header>

	<!-- <h1>
		<?php
		 
		 #$name = "Michael Spaanheden";
			$name = $_GET['name']; //gets string from url
			$Greeting = "Hello, ";

			echo $Greeting, $name


		 ?>
	</h1> -->
	 <h1>
	 	
	 	<!--
	 	<?php echo "Hello, " . $_GET['name']; ?>
	 	-->
	 	<!--
		<?= "Hello, " . $_GET['name']; ?>
		-->

		<!-- nameOfTheFunction(); -->
		<?php

		$greeting = "Hello, ";
		$name = " Boom";

		echo "{$greeting} " . htmlspecialchars($_GET['titel'] . "{$name}"); 


		 ?>

	
	</h1>

	</header>


</body>
</html>
