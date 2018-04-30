<?php
	//è uma biblioteca que oferece suporte a varios bancos de dados
	//a primeira coisa 
	//Definir alguns parametros basicos para abrir a conexão com bando de dados

	$dsn = "mysql:dbname=blog;host=127.0.0.1";//qual banco de dados : nome do banco ; o ip de onde está o banco 
	$dbuser="root"; //usuario do banco de dados
	$dbpass= ""; //senha do banco

	//após isso é preciso iniciar o PDO e enviar os parametros

	try{

		//iniciando pdo
		$pdo = new PDO($dsn,$dbuser,$dbpass);

		echo "Conxão estabelicida com sucesso";
		

	}catch(PDOException $e){
		echo "falhou :".$e->getMessage();

	}


?>