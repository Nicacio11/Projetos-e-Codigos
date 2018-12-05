<?php

	//arquivos independente se é post ou get vai ser pega atraves de $_FILES['']

	//esse arquivo é armazenado em uma pasta temporariamente no servidor então é passado o caminho de onde está
	$arquivo = $_FILES['arquivo'];
	print_r($arquivo);
	if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name'])==false){
		//echo $arquivo['tmp_name'];
		//move o upload para um certo lugar
		//nomedoarquivo aleatorio
		$nomedoarquivo = md5(time().rand(0, 99)).'.png';
		//move_uploaded_file($arquivo['tmp_name'], "SistemaDeLogin/".$arquivo['name']);

		//colocando com um nome falso
		move_uploaded_file($arquivo['tmp_name'], "SistemaDeLogin/".$nomedoarquivo);
		echo "Arquivo enviado com sucesso";
	}

?>
