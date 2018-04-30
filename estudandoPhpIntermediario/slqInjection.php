<?php

	//exemplo

	$usuario = addslashes($_POST["usuario"]);// ' or 1=1 vai retornar todos os usuarios '; DROP TABLE posts;

	$sql = "SELECT * FROM posts WHERE autor = '$usuario'" // da chance do usuario fazer algo malicioso
	//uma forma de proteção é usando o addslashes , pega todos as '' e coloca a \ dessa forma o mysql vai entender que faz parte da string
?>