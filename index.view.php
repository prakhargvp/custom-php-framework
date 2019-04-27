<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<ul>
		<?php foreach ($tasks as $task) : ?>
			<li>
				<?php if($task->isComplete()) : ?>
					<strike> <?= $task->description; ?>	</strike>
				<?php else: ?>
					<?= $task->description; ?>	
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>