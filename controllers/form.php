<?php
$users = $app['database']->selectAll('users');
require 'views/form.view.php';