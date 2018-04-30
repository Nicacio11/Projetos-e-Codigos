<?php

	//explode divide uma String

	$nome = "Vitor Nicacio";

	$vari = explode(" ",/*quer dizer q vai remover o espaço*/ $nome);

	echo print_r($vari)."<br/>";

	//o contrario dessa variavel é o implode

	$array= array("Vitor", "Nicacio");

	$nomecompleto = implode(" ",/*Quer dizer q vai juntar os nomes com espaço entre os valores do array*/$array);
	echo $nomecompleto."<br/>";


	//number_format é um formatador de numeros 

	$numero = number_format(8.3526, 2, ",", ".");

	echo $numero."<br/>";;


	//str_replace subistribui uma string por outra 

	$texto = "Nicacio. Vitor";
	$string = str_replace(".",",", $texto);
	echo $string."<br/>";;

	//strtolower transforma toda string em minusculo

	//strtoupper transforma toda string em maiusculo

	//substr retorna uma parte da string

	$teste = "Vitor Nicacio" ;

	$x = substr($teste,/*posição inicial*/0,/*Quantidade de casas q vai pegar*/5);

	echo $x."<br/>";


	//ucfirst coloca toda primeira letra maiuscula
	//ucwords coloca toda primeira letra de cada palavra maiuscula
?>