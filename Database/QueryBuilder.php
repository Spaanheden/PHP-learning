<?php


class QueryBuilder

{
	protected $pdo;
	
	public function __construct ($pdo)
	{
		$this->pdo = $pdo;

	}
	

	Public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement ->execute();

		return $statement->fetchALL(PDO::FETCH_CLASS);
	}	

}