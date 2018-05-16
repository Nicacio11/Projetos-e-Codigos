<?php
  class CarroDAO extends BaseDAO{

    public function __construct(){
      parent::__construct();
    }

    public function set(Carro $carro){
        $sql = $this->db->prepare("INSERT INTO carros (nome, marca) VALUES (:nome, :marca)");
        $sql->bindValue( ':nome', $carro->getNome(), PDO::PARAM_STR );
        $sql->bindValue( ':marca', $carro->getMarca(), PDO::PARAM_STR );
        $sql->execute();

    }
    public function get(){
      $arrayCarro = array();

      $sql = $this->db->query("SELECT * FROM carros");
      if($sql->rowCount()>0){

        foreach($sql->fetchAll() as $item){
          $carro = new Carro();
          $carro->setNome($item['nome']);
          $carro->setId($item['id']);
          $carro->setMarca($item['marca']);
          $array[] = $carro;
        }
        return $array;
      }

    }
  }
?>
