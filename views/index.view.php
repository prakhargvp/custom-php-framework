<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/about">About Page</a></li>
			<li><a href="/contact">Contact Page</a></li>
		</ul>
	</nav>
	<ul>
		<?php foreach ($tasks as $task) : ?>
			<li>
				<?php if($task->completed) : ?>
					<strike> <?= $task->description; ?>	</strike>
				<?php else: ?>
					<?= $task->description; ?>	
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>