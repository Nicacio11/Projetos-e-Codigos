<?php

  //tipando as variaveis e retornos
  declare(strict_types=1)
  class Definicao{
    private int $primeiro;
    private int $segundo;

    public function __construct(int $primeiro, int $segundo){
      $this->primeiro = $primeiro;
      $this->segundo = $segundo;
    }
    public function somar():int{
      return $primeiro+segundo
    }
  }
  public function somar(int $valor1, int $valor2): int{
      return $valor1+$valor2
  }


 ?>
