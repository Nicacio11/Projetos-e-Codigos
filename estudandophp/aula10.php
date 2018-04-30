Função exit para parar o if 
Concatenação em php  é diferente do java que utiliza o mais
	no php utiliza o ponto 
	exemplo
	echo "resultado :".$resultado;
	
	
	
Aula 11
	
	Função TRIM retira os espaços em branco
	função is_numeric verifica se a variavel é numerico
<?php
	
	$nome = trim($_POST("n1"));
	$numero2 = $_POST("n2");
	
	$resultado = $numero1 + $numero2;
	//if(!is_numeric($numero2){
	//	echo"Não é um numero";
	//	exit;
	//}
	echo $resultado;
?>
