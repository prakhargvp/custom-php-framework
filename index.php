<?php 
require 'functions.php';

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'prakhar', '');
} catch(PDOException $e) {
	die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

// Generally little careful about it, fetch
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';