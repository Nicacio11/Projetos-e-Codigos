<?php
	session_start();

	$_SESSION["teste"] = "Vitor Nicacio";

	echo "Sess�o foi feita"."<br/>";

	echo "Meu nome � ".$_SESSION["teste"]."<br/>";


	//criando cookie

	setcookie("identificacaoDoCookie"," Valor dele" ,/*Tempo do cookie*/ time()+3600/*segundos*/);

	echo "Cookie setado com sucesso"."<br/>";
	echo "Meu cookie � :".$_COOKIE["identificacaoDoCookie"];
?>