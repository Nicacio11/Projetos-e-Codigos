<?php
  //Essa é a pagina inicial do projeto
  //Há uma recomendação que a sessão precisa ser o primeiro comando a ser iniciado


  session_start();

  //o config.php é onde terão as configurações do banco de dados -com o dao é desnecessario
  //require 'config.php';

  /*
    Ao digitar na url www.vitornicacio.com.br/index?url=home
    devido ao .htaccess não estava mostrando assim
    deixando a url mais bonita

    Qualquer coisa que não for arquivo ou diretorios sera armazenado em index.php?url=valor
    segundo a regra do .htaccess


    www.vitornicacio.com.br/home

    o autoload serve para ajudar na instanciação das classes
    */

    spl_autoload_register(function($class){
      if(file_exists('controllers/'.$class.'.php')){

        require_once 'controllers/'.$class.'.php';

      }else if(file_exists('models/'.$class.'.php')){

        require_once 'models/'.$class.'.php';

      }else if (file_exists('core/'.$class.'.php')){

        require_once 'core/'.$class.'.php';
      }else if(file_exists('DAO/'.$class.'.php')){
        require_once 'DAO/'.$class.'.php';
      }else{
        require_once $class.'.php';
      }
    });


    //startando a classe responsavel por definir o caminho

    $core = new Core();
    $core->run();
?>
