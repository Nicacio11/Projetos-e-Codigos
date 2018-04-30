<?php
 
 function somarNumero($x, $y){
 	$valor;
 	$valor=$x + $y;
 	return $valor;
 }
 $valor1 = 5;
 $valor2 = 6;
 echo "valor 1 = ".$valor1."<br/>";
 echo "valor 2 = ".$valor2."<br/>";
 echo "Resultado = ".somarNumero($valor1, $valor2)."<br/>";
?>