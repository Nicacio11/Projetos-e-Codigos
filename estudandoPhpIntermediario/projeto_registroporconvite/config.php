<?php
	$db = "mysql:dbname=projeto_registroporconvite;host=127.0.0.1";
	$dbuser ="root";
	$dbpass="";



	try{

		$pdo = new PDO($db, $dbuser, $dbpass);

	}catch(PDOException $e){
		echo "Erro :".$e->getMessage();
	}
?>