<?php
	
	//definindo parametros basicos para a conex�o
	$dsn = "mysql:dbname=blog;host=127.0.0.1";
	$dbuser= "root";
	$dbpass= "";


	try{
		//iniciando PDO responsavel pela conex�o
		$pdo = new PDO($dsn, $dbuser, $dbpass);


		//preparando a query para pegar dados

		$sql = "SELECT * FROM post"; //string
		echo "Conx�o estabelicida com sucesso";
		$sql = $pdo->query($sql); //aqui reescrevo a string com a conex�o do bd // vira uma classe da biblioteca pdo

		//antes de mostrar a consulta � preciso verificar se chegou alguma linha

		if($sql->rowCount() > 0){

			//caso tenha retornado algo usaremos o foreach para percorrer
			foreach($sql->fetchAll() as $post) {//basicamente o fetchAll vai pegar todos os resultados da consulta e transformar em um array e inserir na variavel usuario

				echo "<br/>Titulo :".$post["titulo"]." Data :".$post["data_criado"]." Autor ".$post["autor"];
				echo "<br/>Corpo".$post["corpo"];

			}

		}else{
			echo "<br/> N�o existe nada no banco de dados";
		}


	}catch(PDOException $e){
		echo "Falhou :".$e->getMessage();
	}
?>