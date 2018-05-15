<?php
  //importação do environment que dirá se estamos em um ambiente de produção ou de desenvolvimento

  require 'environment.php';

  global $db;
  $config = array();

  //
  if(ENVIRONMENT=='development'){
      define("BASE_URL", "http://localhost/Projetos-e-Codigos/PHPSuperAvançado/PraticandoMVC-DAO/");
      $config['dbname']= 'estoque';
      $config['host']= 'localhost';
      $config['dbuser']= 'root';
      $config['dbpass']= '';
  }else{
    define("BASE_URL", "http://vitornicacio.com.br/projeto/");
    $config['dbname']= 'projeto';
    $config['host']= 'localhost';
    $config['dbuser']= 'root';
    $config['dbpass']= 'root';
  }

  try{

    //conexão com o banco de dados
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //mostrando erro caso aconteça
    echo "conetado ao banco com sucesso";
  }catch(PDOException $e){
    echo 'Erro: '.$e->getMessage();
    exit();
  }


 ?>
