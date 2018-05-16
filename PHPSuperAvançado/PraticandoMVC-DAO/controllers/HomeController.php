<?php
  class HomeController extends Controller{

    public function index(){

      $data = array();

      $carroDao = new CarroDAO();
      $carros = $carroDao->get();
      $data['carros'] = $carros;
      $this->loadTemplate('Home', $data);
    }

    public function cadastrar(){
      $nome = (isset($_POST['nome']))?addslashes($_POST['nome']):'';
      $marca = (isset($_POST['marca']))?addslashes($_POST['marca']):'';

      $carro = new Carro();
      $carro->setNome($nome);
      $carro->setMarca($marca);

      $carroDao = new CarroDAO();
      $carroDao->set($carro);


    }
  }

?>
