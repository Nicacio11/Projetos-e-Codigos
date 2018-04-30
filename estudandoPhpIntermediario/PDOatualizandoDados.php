<?php

	$dsn = "mysql:dbname=blog;host=127.0.0.1";//caminho
	$dbuser = "root";
	$dbpass = "";


	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);

		$novaSenha= md5("teste123");
		$senha = md5("nicacio@11");

		$sql = "UPDATE usuarios SET senha = '$novaSenha' WHERE senha = '$senha'";

		$pdo->query($sql);


		echo "usuario alterado";

	}catch(PDOException $e){

		echo "Erro :".$e->getMessage();

	}
?>