<?php

	try {
		$pdo = new PDO('mysql:host=localhost;dbname=db_jason','root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$output = 'Database connection established.';
	}

	catch (PDOExeception $e) {
		$output = 'Unable to connect to the database server.' .$e;
	}
?>