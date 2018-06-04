<?php

  class Template{
    private $html;


    public function __construct($file){
        //verificando se existe
        if(file_exists($file)){
          //pegando os dados do arquivo
          $this->html = file_get_contents($file);
        }
    }
    public function render($array){
        //percorrendo o array
        foreach($array as $chave => $valor) {
            //fazendo a substituição
            $this->html = str_replace('{'.$chave.'}', $valor, $this->html);
        }
        echo $this->html;
    }
  }

 ?>
