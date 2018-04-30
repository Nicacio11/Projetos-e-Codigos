<?php
	
	//array_keys reetorna o array so com as chaves q eu especificar
	$array = array("nome"=>"Vitor","sobrenome"=>"Nicacio","idade"=>"21");
	$teste = array_keys($array);

	print_r($teste);
	
	//array_values cria um arraysó com os valores
	$teste2 = array_values($array);
	print_r($teste2);

	
	//array_pop() retorna o proprio array removendo o ultimo registro 
	//array_shift() remove o primeiro item do array
	//asort(array) ele ordena o array mas mantém a associação entre indices e valores por ordem crescente
	//arsort(array) ordena em ordem decrescente
	//count(array) quantos registro tem o array 
	//in_array("valor", $array) verifica se o registro esta no array

	echo count($array);
?>