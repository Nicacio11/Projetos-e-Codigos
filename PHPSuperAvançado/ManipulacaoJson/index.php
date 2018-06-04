<?php

  //pegando os dados do json
  $json = file_get_contents("https://www.correiodoestado.com.br/climatempo/json/");

  //transformando em json
  $json = json_decode($json);

  echo "Previsoes retornadas: ".count($json->previsao)."<br/>";

  foreach ($json->previsao as $cidade) {
    echo "<br/>Cidade :".$cidade->cidade.' - '.$cidade->frase;
  }

?>
