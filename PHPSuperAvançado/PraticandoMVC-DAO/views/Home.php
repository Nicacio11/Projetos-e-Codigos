<form method="post" action="<?php echo BASE_URL?>Home/cadastrar">
  <input type="text" name="nome" placeholder="Nome do Carro" />
  <br/>
  <input type="text" name="marca" placeholder="Marca do Carro"/>
  <br/>
  <input type="submit"/>
</form>
<?php
  echo "<br/>home<br/>";
  foreach ($carros as $carro) {
    echo $carro->getNome()." ".$carro->getMarca();
  }


?>
