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

	<ul>

		<?php foreach ($animals as $animal) {
			
			//echo "<ol type ="1">
			 //<li>$animal</li> 
			 //</ol>";
			echo "<li>$animal</li>";
		}

		?>

	</ul>

	


</body>
</html>