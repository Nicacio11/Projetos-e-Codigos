<?php

/* 
 * Constante nada mais é uma variavel que vai ser constante ou seja nunca vai mudar
 *  um pouco diferente de definir uma variavel com o $ são as variaveis constantes
 * utilizando o define("nome da variavel"); normalmente definida toda maiuscula
 * utilizada bastante para definir o valor de uma versão
 */


define("VARIAVELCONSTANTE","valor da variavel");

define("URL","www.google.com.br");

echo URL;

//variaveis

$nome="Vitor";
echo "meu nome eh $nome"; //nesse caso por conta das aspas duplas é possivel utilizar a variavel dentro das aspas
echo 'meu nome eh $nome'; //dessa forma não funcionara