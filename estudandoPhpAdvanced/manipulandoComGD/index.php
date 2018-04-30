<?php 
	$imagem = "vitor.jpg";

	list($largura_original, $altura_original) = getimagesize($imagem);

	list($largura_mini, $altura_mini) = getimagesize("logo.png");
	$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

	$imagem_original= imagecreatefromjpeg($imagem);
	$imagem_mini = imagecreatefrompng("logo.png");

	imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0,
	 $largura_original, $altura_original);


	imagecopy($imagem_final, $imagem_mini,100,200,1,30,$largura_mini, $altura_mini);
	imagejpeg($imagem_final, "imagemnew.jpeg", 100);	
?>