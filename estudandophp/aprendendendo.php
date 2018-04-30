<?php

//definição de variavel com o $ na frente

$nome = "Vitor";
$sobrenome="Nicacio";
$url = "http://www.google.com.br";

echo "Hello World";
echo "<br>";
echo "Meu nome eh: ".$nome." ".$sobrenome;

$nome = "String";
$numero = 20; //inteiro
$nota = 7.5; //float
$booblean = true;// ou false 
$grupos = array(1,2,3,4,5);
echo "<br>";
 $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "<br>";
echo $numeros[0]."<br>".$numeros[1];

//é possivel também dar titulos para o array

$teste = array("nome"=>"Vitor", "sobrenome"=>"Nicacio");
echo "<br>";
echo $teste["nome"];
echo "<br>";
echo $teste["sobrenome"];
print_r($numeros);

