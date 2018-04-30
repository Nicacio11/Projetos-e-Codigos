<?php

	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";


	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

		$nome = "Vitor";
		$email = "abc@hotmail.com";
		$senha = md5("12345");	

		$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";

		$sql = $pdo->query($sql);

		// a unica coisa que o ao inserir retorna é o id do usuario inseriod
		
		echo "usuario inserido com sucesso ".$pdo->lastInsertId();

	}catch(PDOException $e){

		echo "Erro :".$e->getMessage();
	
	}


?>