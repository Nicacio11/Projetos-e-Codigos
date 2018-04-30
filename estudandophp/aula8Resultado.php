<?php
	print_r($_POST);
	$numero1 = $_POST("n1");
	$numero2 = $_POST("n2");
	
	$resultado = $numero1 + $numero2;
	
	echo $resultado;
?>



Aspas duplas é possivel utilizar a variavel para receber o resultado exemplo echo "total : $total";
	Em aspas simples retornaria o nome $total em vez do resultado