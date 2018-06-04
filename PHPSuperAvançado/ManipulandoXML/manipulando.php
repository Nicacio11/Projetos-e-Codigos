<?php

  /*
    *recebe um array com os dados
    *recebe um objeto SimpleXMLElement
    *& quer dizer que toda alteração feita na variavel dentro da função vai sofrer  alterações na variavel original
  */
  function array_to_xml($data, &$xml_data){
    foreach ($data as $key => $value) {

      //se o valor for um array quer dizer que tem mais itens dentro dele
      if(is_array($value)){
        if( is_numeric($key) ){
          $key = 'item'.$key;
        }
        //pegando a key para a tag
        $subnode = $xml_data->addChild($key);
        //rodando para cair no else e adicionar
        array_to_xml($value, $subnode);
      }else{
        if( is_numeric($key) ){
          $key = 'item'.$key;
        }
        $xml_data->addChild($key, htmlspecialchars($value));
      }
    }
  }
?>
