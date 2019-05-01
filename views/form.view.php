	<?php require('partials/head.php'); ?>

	<h1>Submit Your Name</h1>
	<ul>
		<?php foreach ($users as $i => $user) : ?>
		<li><?=$user->name?></li>
		<?php endforeach; ?>
	</ul>	
	<form method="POST" action="/add-name">
		<input type="text" name="name">
		<input type="submit">
	</form>

	<?php require('partials/footer.php'); ?>
