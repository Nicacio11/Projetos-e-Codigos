<?php
  // duas formas antes do php set para verifcar

  $array = array('nome' => 'Vitor Nicacio', 'idade' => 50);

  $nome = '';
  if(isset($array['nome'])){
    $nome = $array['nome'];
  }else{
    $nome = '';
  }
  echo $nome."<br/> ";

  //ou
  $nome = (isset($array['nome']))?$array['nome']:'';
  echo $nome;



  //com o php 7

  $nome = $array['nome'] ?? '';
  echo "<br/> Php 7 resultado: ".$nome
 ?>
