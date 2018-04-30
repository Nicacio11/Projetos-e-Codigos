<?php 
	//A biblioteca GD vem quando instalamos o php
	/*
		O php consegue manipular imagem assim como o photoshop utilizando o gd

	*/
		//nome do arquivo
		$filename = "vitor.jpg";

		//altura e largura que será cortada
		$maxwidth = 200;
		$maxheight = 200;

		//pegando a altura e a largura da imagem
		list($largura_original, $altura_original) = getimagesize($filename);

		//é a proporção entre largura e altura da imagem
		$ratio = $largura_original / $altura_original;
		echo $ratio;

		// se o ratio da imagem final for maior q o ratio da imagem original 
		//então muda a largura caso contrario muda a largura;
		if($maxwidth / $maxheight > $ratio){

			$maxwidth = $maxheight * $ratio;

		}else{
			$maxheight = $maxwidth/$ratio;
		}

		//echo "Largura".$largura_original." Altura ".$altura_original."</br>";
		//echo "Largura".$maxwidth." Altura ".$maxheight."</br>";

		//aqui ja está usando a biblioteca gb colocando o tamanho q terá a imagem
		$image_final = imagecreatetruecolor($maxwidth, $maxheight);

		//aqui pegamos a imagem
		$image_original = imagecreatefromjpeg($filename);

		//diminui a proporção da imagem ajustando-a

		imagecopyresampled($image_final, $image_original,//imagem final e original
		 0, 0, 0, 0,//posições q serão pegas
		 $maxwidth, $maxheight, $largura_original, $altura_original);

		//mostrando na tela

		
		header("Content-type: image/jpg"); 
		imagejpeg($image_final, "imagemnew.jpeg", 70);
?>