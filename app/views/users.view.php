	<?php require('partials/head.php'); ?>

	<h1>Users</h1>
	<ul>
		<?php foreach ($users as $i => $user) : ?>
		<li><?=$user->name?></li>
		<?php endforeach; ?>
	</ul>	

	<h1>Submit Your Name</h1>
	<form method="POST" action="/users">
		<input type="text" name="name">
		<input type="submit">
	</form>

	<?php require('partials/footer.php'); ?>
