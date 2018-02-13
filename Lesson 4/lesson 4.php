<!DOCTYPE html>

<html lang="en">

<head>
	<Meta charset="UTF-8">
	<title>Document</title>

	<style>
		header {
			background: #yellow;
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
		<?= "Hello, " . htmlspecialchars($_GET['name']);  ?> <!-- //"sanatizing input" -->

	
	</h1>

	</header>


</body>
</html>
