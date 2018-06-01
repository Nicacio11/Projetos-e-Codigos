<?php
  if(file_exists("cache.cache")){
    require 'cache.cache';
  }else{
    //tudo que for impresso dentro da função ob será ocultado do usuario
    //tudo que for impresso sera gravado na memoria
    ob_start();
      //pegando a pagina
      require "pagina.php";
      //pegando o html da pagina que foi carregada no required
      $html = ob_get_contents();
    ob_end_clean();

    //criando o Cache
    file_put_contents("cache.cache", $html);
    //mostrando o html
    echo $html;
  }
?>
