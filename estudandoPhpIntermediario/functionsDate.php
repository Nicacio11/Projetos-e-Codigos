<?php
	
	$dataatual = date("d/m/Y \à\s H:i:s");
	
	//dmY
	//d m Y
	//Y-m-d
	//m-d-Y

	//h hora i minutos s segundos

	// a barra ao contrario faz com q na data seja identificado como texto
	echo $dataatual."<br/>";


	$time = time();
	//time retorna segundos
	echo $time."<br/>";

	//$mktime = mktime();

	//usada também para comparar duas horass


	echo strtotime("+1 day")//retorna o tempo baseado notempo atual em string 
?>