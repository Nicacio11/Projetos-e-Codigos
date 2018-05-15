<?php
  class BaseDAO{
    protected $db;

    public  function __construct(){

      /*if(ENVIRONMENT=='development'){
          define("BASE_URL", "http://localhost/Projetos-e-Codigos/PHPSuperAvançado/PraticandoMVC-DAO/");
          $config['dbname']= 'estoque';
          $config['host']= 'lo0calhost';
          $config['dbuser']= 'root';
          $config['dbpass']= '';
      }else{
        define("BASE_URL", "http://vitornicacio.com.br/projeto/");
        $config['dbname']= 'projeto';
        $config['host']= 'localhost';
        $config['dbuser']= 'root';
        $config['dbpass']= 'root';
      }*/
      define("BASE_URL", "http://localhost/Projetos-e-Codigos/PHPSuperAvançado/PraticandoMVC-DAO/");
      try{
        //conexão com o banco de dados
        $this->db = new PDO("mysql:dbname=estoque;host=localhost", "root", "");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //mostrando erro caso aconteça
        echo "conetado ao banco com sucesso";
      }catch(PDOException $e){
        echo 'Erro: '.$e->getMessage();
        exit();
      }

    }

  }

?>
