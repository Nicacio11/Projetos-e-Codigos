<?php

/*
Variaveis globais são arrays que o php disponibilisa para serem utilizados quando necessario
 * normalmente começa com _
    exemplo $_SERVER
*/

print_r($_SERVER);


$nome = $_GET["nome"];
echo "Seu nome é ".$nome;

$_POST["teste"];