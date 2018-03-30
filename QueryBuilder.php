<?php

class QueryBuilder {

	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}


	public function fetchAll($table)
	{
		$query = $this->pdo->prepare("SELECT * FROM {$table}");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS);
	}

	public function first($table){
		$query = $this->pdo->prepare("SELECT * FROM {$table} LIMIT 1");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_CLASS);
	}

	public function add($table, $params){
		$columns = implode(', ',array_keys($params));
		print_r($params);
		$values = ':' . implode(', :',array_keys($params));

		$sql = "INSERT INTO {$table} ({$columns}) VALUES ($values)";

		try{
			$query = $this->pdo->prepare($sql);
			$query->execute($params);
		} catch(Exception $e){
			die('Something whent worng. Try again later');
		}
		
	}
}