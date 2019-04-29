<?php

class DatabaseTable {
	private $pdo;
	private $tablename;

	public function_construct($pdo, $tablename) {
		$this->pdo = $pdo;
		$this->tablename = $tablename;
	}

	public function query($pdo, $query) {
		$query = $pdo->prepare($query);
		$query->execute();
		return $query;
	}

	public function count() {
		$query = $this->query($this->pdo, "select count(*) from $this->tablename");
		$row = $query->fetch();

		return $row[0];
	}
}
?>