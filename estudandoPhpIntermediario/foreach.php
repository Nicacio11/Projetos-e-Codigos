<?php
	$nomes = array("Vitor","Marcelo","Georgeton","João");

	foreach ($nomes as $aluno) {
		echo "Aluno :".$aluno."<br/>";
	}

	$alunos = array(
		array("nome"=>"Vitor", "idade"=>"21"),
		array("nome"=>"Anderson", "idade" =>"27"),
		array("nome"=>"Udisson", "idade"=>"32"),
		array("nome" =>"João", "idade" =>"55"));

	foreach($alunos as $pessoa){
		echo "Pessoa :".$pessoa["nome"]. " - idade :".$pessoa["idade"]."<br/>";
	}	
	
	foreach ($nomes as $chave => $dado) {
		echo $chave." = ".$dado."<br/>";
	}
?>