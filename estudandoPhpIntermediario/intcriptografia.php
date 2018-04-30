<?php
	
	$nome = "vitor";
	$nome2 = md5($nome);
	$nome3 = base64_encode($nome);
	echo $nome2."<br/>";
	echo "Text criptografado que pode retornar ao normal :".$nome3."<br/>";
	echo "Texto descriptografado :".base64_decode($nome3);


	//md5 padrão de criptografia que não consegue retornar ao padrão original;
	//base64_encode padrão de criptografia que pode reverter 

?>