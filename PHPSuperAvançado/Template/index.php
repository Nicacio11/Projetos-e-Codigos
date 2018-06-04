<?php

  //Template nada mais é que uma codigo html misturado com algumas chaves que vão ser substituidos
  //depois pelo php pelo valor real

   $array = array('titulo' => 'Inicio'
   , 'nome' => 'Vitor'
   , 'idade' => 90
 );
   require 'template.php';

   $template = new Template('template.phtml');
   $template->render($array);

 ?>
