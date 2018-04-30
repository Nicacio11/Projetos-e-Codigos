<?php
  require 'environment.php';
  $config = array();
  if(ENVIRONMENT=='development'){
      define('BASE_URL', 'http://localhost/PhpSuperAvançado/classificados_mvc/');
      $config['dbname'] = 'classificados';
      $config['host'] = 'localhost';
      $config['dbuser'] = 'root';
      $config['dbpass'] = '';

  }else if(ENVIRONMENT=='production'){
    define('BASE_URL', 'http://localhost/PhpSuperAvançado/classificados_mvc/');
    $config['dbname'] = 'classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dpass'] = '';
  }
  global $db;

  try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
  }catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit;
  }
 ?>
