<!DOCTYPE html>

<html lang="en">

<head>
	<Meta charset="UTF-8">
	<title>Document</title>
</head>


<body>

 	<ul>
 		<?php foreach ($person as $feature => $val) : ?>
 			<li><strong><?= $feature; ?></strong><?= $val; ?></li>
 		<?php endforeach; ?>


 	 </ul>



</body>

</html>