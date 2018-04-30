<?php

	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
		
	try{
		$pdo = new PDO($dsn, $dbuser, $dbpass);

		$sql = "DELETE FROM usuarios where id = 9";

		$pdo->query($sql);

		echo "Usuario deletado com sucesso";
	}
	catch(PDOException $e){
		echo "Erro :".$e->getMessage();
	}	
?>