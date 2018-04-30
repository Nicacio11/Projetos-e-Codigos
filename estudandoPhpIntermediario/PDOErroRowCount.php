<?php
	
	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

		//caso queira saber o erro do rowCount
		//obrigatoriamente mostra o erro
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}catch(PDOException $e){
		echo "Erro :".$e->getMessage();
	}

?>