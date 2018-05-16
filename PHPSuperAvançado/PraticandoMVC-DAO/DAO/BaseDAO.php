<?php
  class BaseDAO{
    protected $db;

    public  function __construct(){

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
