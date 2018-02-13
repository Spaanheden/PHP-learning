<!DOCTYPE html>

<html lang="en">

<head>
	<Meta charset="UTF-8">
	<title>Document</title>
</head>


<body>

<h1>Task For The Day</h1>

	<ul>

			<li>
			<strong>Name: </strong> <?= $task['title']; ?>
			</li> 

			<li>
			<strong> Due Date: </strong> <?= $task['due']; ?>
			</li>

			<li>
			<strong> Person Responsible: </strong> <?= $task['assigned_to']; ?>
			</li>

			<li>
			<strong> Status: </strong>

			<!-- if (! true) {} if false as shown by bang !
			if (true)	{} if true as shown without bang ! -->

			<?php if ($task['completed']) : ?>
				<span class="icon">&#9989</span>
			<?php else : ?>
				<span class="icon">&#10060</span>

			<?php endif; ?>
			


			<!-- <?= $task ['completed'] ? 'Finished' : 'Incomplete'; ?> -->
			
<!-- 			<?php if ($task['completed'])
				{
					echo '&#9989';
				}
			 else 
				{
					echo 'Incomplete';
				}
			
			?> -->
			</li>



	</ul>

</body>

</html>