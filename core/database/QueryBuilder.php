<?php

namespace Core\Database;
use PDO;

class QueryBuilder 
{
	protected $pdo;
	public function __construct($pdo)
	{	
		$this->pdo = $pdo;
	}

	public function selectAll($table) 
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();
		// Generally little careful about it, fetch
		return $statement->fetchAll(PDO::FETCH_CLASS);		
	}

	public function insert($table, $parameters)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);

		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute($parameters); // bindParam - named placeholder
		} catch(Exception $e) {
			die('Whoops, something went wrong.');
		}
	}
}