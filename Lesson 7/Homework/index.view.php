<!DOCTYPE html>

<html lang="en">

<head>
	<Meta charset="UTF-8">
	<title>Document</title>
</head>


<body>

 	<ul>
 		<?php foreach ($task as $details => $val) : ?>
 			<li><strong><?= $details ; ?></strong> <?= $val; ?></li>
 		<?php endforeach; ?>


 	 </ul>



</body>

</html>