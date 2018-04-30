<?php
  class galeriaController extends controller{
    public function index(){
      $dados = array('qtdFotos' => 120);
      $this->loadTemplate('galeria', $dados);
    }
  }
 ?>
