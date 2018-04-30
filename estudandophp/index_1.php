<?php
	$nome = "Vitor";
	$ano = 2016;
	//criando um array no php
	$cores = array("Azul","Verde","Amarelo");
	
	
	echo "Hello World<br>";
	echo $nome;
	echo "<br>";
	echo $ano;
	echo $cores[0];//azul
	echo $cores[1]; //verde
	echo $cores[2];//amarelo
	
	
	//segundo exemplo de array
	$anos = array();// boa pratica de programação definir o array
	$anos[] = "2016";// desta forma ele vai automaticamente vai para a posição inicial ou a proxima posição livre
	// se ao definir o valor na posição do array pular alguma posição e tentar exibir a mesma, ocorre erro]
	
	
	
	//terceiro exemplo de array
	$letras = array(0 => "Azul",1 => "Verde", 2 =>"Amarelo");// é possivel especificar a posição do array no php para cada valor no array
	echo $letras[1];
	
	
	//Quarto exemplo de array
	//array de numeros
	$numeros = array(1,2,3,4,5);
	echo $numeros[0];// valor = 1
?>
<table border="1" bgcolor="#c0c0c0" width="100%">
	<tr>
		<td>Nome</td>
		<td>Ano</td>
	</tr>
	<tr>
		<td><?php echo $nome; ?></td>
		<td><?php echo $ano; ?></td>
	</tr>
</table>

tudo que está fora da tag <?php ?> é visto como html
PHP é uma linguagem que trabalha junto com o html
Inicialização de variavel começa com $ 
	não é preciso definir o tipo da variavel
		seu tipo vai ser depender do que atribuir a ele
			Se atribuir um numero sem utilizar aspas essa variavel será inteiro
			se atribuir um numero dentro de aspas essa variavel  será string
			se atribuir um texto dentro de aspas duplas será string
			se atribuir um text sem aspas vai dar error_get_last
