<?php

    declare(strict_types=1);
    require 'Cache.php';
    if(file_exists("cache.cache")){
      require 'cache.cache';
    }else{

      ob_start();
        //pegando a pagina
        require "pagina.php";
        //pegando o html da pagina que foi carregada no required

        $html = ob_get_contents();
      ob_end_clean();

      //print_r($html);
      $c= new Cache();
      $c->setVar($html);

      echo $c->getVar();

    }
?>
