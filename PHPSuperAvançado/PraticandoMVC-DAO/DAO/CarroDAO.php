<?php
  class CarroDAO extends BaseDAO{

    public function __construct(){
      parent::__construct();
    }

    public function set(Carro $carro){
        $sql = $this->db->prepare("INSERT INTO carros (nome, marca) VALUES (:nome, :marca)");
        $sql->bindValue( ':nome', $carro->getNome() );
        $sql->bindValue( ':marca', $carro->getMarca() );
        $sql->execute();

    }
    public function get(){
      $arrayCarro = array();

      $sql = $this->db->query("SELECT * FROM carros");
      if($sql->rowCount()>0){

        foreach($sql->fetchAll() as $item){
          $array[] = new Carro($item);
        }
        return $array;
      }

    }
  }
?>
