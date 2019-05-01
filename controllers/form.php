<?php
$users = App::get('database')->selectAll('users');
require 'views/form.view.php';