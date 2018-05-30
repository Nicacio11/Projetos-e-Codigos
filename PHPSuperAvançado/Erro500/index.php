<?php
  //O erro 500 quer dizer que ouve erro no lado do servidor
  //mas o proprio servidor não sabe que erro é esse
  //na maioria das vezes ocorre por que o php não está configurado para exibir erros - 90%
  //há duas formas

  //habilitando a exibição de erros
  error_reporting(E_ALL);//todo tipo de erro vai ser computado
  ini_set("display_errors", "On");//pega todos os erros e exibe


  //segunda forma - achar o php.ini
  phpinfo();
  exit
  //configuration File - vai dizer onde está o php.ini
  //procura error_reporting sem o ";"
  // error_reporting = E_ALL
  //depois o display_errorsr
  //display_erros=On

  //salva  e reinicia o xamp, wamp, mamp etc


  //outra forma que pode causar o erro 500 é erro no .htaccess
 ?>
