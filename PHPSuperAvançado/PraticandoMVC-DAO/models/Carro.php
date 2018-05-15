<?php
  class Carro{
    private $id;
    private $nome;
    private $marca;



    public function __construct1($array){
      $this->id = (isset($array['id']))?$array['id']:'';
      $this->nome = (isset($array['nome']))?$array['nome']:'';
      $this->marca = (isset($array['marca']))?$array['marca']:'';
    }
    public function __construct2($nome, $marca){
      $this->nome = $nome;
      $this->marca = $marca;
    }

    public function setNome($nome){ $this->nome = $nome;}
    public function setMarca($marca){ $this->marca = $marca;}
    public function getNome(){ return $this->nome;}
    public function getMarca(){ return $this->marca;}
    public function setId($id){ $this->$id =$id;}
    public function getId(){ return $this->id;}

  }

?>
