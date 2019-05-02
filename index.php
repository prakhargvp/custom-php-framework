<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use Core\Router;
use Core\Request;

require Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());