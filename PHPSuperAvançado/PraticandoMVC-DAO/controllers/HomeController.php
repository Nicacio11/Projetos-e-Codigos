<?php
  class HomeController extends Controller{

    public function index(){

      $data = array();

      $carroDao = new CarroDAO();
      $carros = $carroDao->get();

      $this->loadTemplate('Home', $data);
    }

    public function cadastrar(){
      $nome;
      $marca;
      if(isset($_POST['nome'])&& !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
      }
      if(isset($_POST['marca'])&& !empty($_POST['marca'])){
        $marca = addslashes($_POST['marca']);
      }
      $carro = new Carro($nome, $marca);
      echo $carro->getNome();
      echo $carro->getMarca();
      $carroDao = new CarroDAO();
      $carroDao->set($carro);
    }
  }

?>
