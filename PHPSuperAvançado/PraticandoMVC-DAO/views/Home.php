<form method="post" action="<?php echo BASE_URL?>Home/cadastrar">
  <input type="text" name="nome" placeholder="Nome do Carro" />
  <br/>
  <input type="text" name="marca" placeholder="Marca do Carro"/>
  <br/>
  <input type="submit"/>
</form>
<?php
  echo "<br/>home<br/>";
  //echo $carros->nome;
  print_r($carros);
  for($i =0 ; $i<count($carros); $i++){
    $teste = (object) $carros[$i];
    echo '<br/>nome: '.$teste->getNome();
    echo '<br/>marca: '.$teste->getMarca();
  }


?>
