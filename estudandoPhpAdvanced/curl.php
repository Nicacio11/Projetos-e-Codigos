<?php 
	/*Biblioteca curl é usada para fazer uma integração com outro site

	*/
	//iniciando a biblioteca
	$ch = curl_init();

	//indicar qual endereço que vai requisitar
	// passando  a propria biblioteca , com a url q quer setar e qual a url
	curl_setopt($ch, CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong");

	//agora é necessario setar qual metodo de envio;
	curl_setopt($ch, CURLOPT_POST, 1);

	//campos que iram enviar
	curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Vitor&sexo=Masculino");

	//dizer q vai receber a resposta do servidor
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	//recebendo a resposta
	$resposta = curl_exec($ch);

	//fechando a conexão
	curl_close($ch);

	print_r($resposta);
?>