<?php
  require "manipulando.php";
  //carregando o xml - utilizando a biblioteca simple xml
  //se for arquivo
  $xml = simplexml_load_file("ondas.xml");
  //se for em texto ou na internet usa o load_string

  //no xml o primeia tag q engloba tudo é ignorada então n precisaria colocar $xml->cidade->nome
  echo "Cidade : ".$xml->nome;
  echo "<br/> Manhã: ".$xml->manha->vento;
  echo "<br/> Tarde: ".$xml->manha->vento;
  echo "<br/> Noite: ".$xml->manha->vento;


  //transformando um array em um xml
  $array = array("nome" => "Vitor",
                "sobrenome" => "Nicacio",
                "idade" => 32,
                "caracteristicas" => array('Desenvolvedor PHP', 'Desenvolvedor Android')
);

  //criando um xml vazio - lembrando que a primeira tag é ignorada
 $xml_data = new SimpleXMLElement('<data/>');

 array_to_xml($array, $xml_data);

 //gerando um xml
 $resultado = $xml_data->asXML();

 //criando um arquivo
 file_put_contents("teste.xml", $resultado);
 echo "<br/>".$resultado;
?>
