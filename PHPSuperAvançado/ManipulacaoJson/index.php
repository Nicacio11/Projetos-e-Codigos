<?php

  //pegando os dados do json
  $json = file_get_contents("https://www.correiodoestado.com.br/climatempo/json/");

  //transformando em json
  $json = json_decode($json);

  //adicionando um novo objeto
  $obj = new stdClass();
  $obj->codigo = 111;
  $obj->cidade = "São paulo";
  $obj->uf = "SP";
  $obj->baixa = 01;
  $obj->alta = 02;
  $obj->icon = 2;
  $obj->frase = "Sol e Sol";
  $obj->data="...";
  $obj->dia_mes = "janeito";
  $obj->dia_semana = "...";
  $obj->selecionada = 1;
  $json->previsao[] = $obj;
  echo "Previsoes retornadas: ".count($json->previsao)."<br/>";

  foreach ($json->previsao as $cidade) {
    echo "<br/>Cidade :".$cidade->cidade.' - '.$cidade->frase;
  }

echo "Transformando em json<br/>";
echo json_encode($json);

?>
