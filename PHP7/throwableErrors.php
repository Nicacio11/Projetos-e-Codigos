<?php

  try{
      dasdasda();
  }catch(Throwable $e){
    echo "Erro: ".$e->getMessage()."<br/>";
    echo "Erro local: ".$e->getFile()."<br/>";
    echo "Erro linha: ".$e->getLine()."<br/>";
    $msg = $e->getMessage();
    file_put_contents('erro.txt', $msg);
  }

?>
