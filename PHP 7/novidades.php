<?php
  /* O php teve uma refactoração do codigo completo em termos defundamento
  todo codigo base do php foi recriado de forma a recriar
  performance - quantidade de requisições que o php pode fazer por segundo e o quão rapido elas acontecem

  melhorias de desempenho

  adição de declaração de tipo de variavel e return

    especificando tipo
    declare(stric_types=1); faz com que a string só possa receber string
    function somar(float $a, int $b){

    }
    function somar(float $a, int $b):float{
      return $a+$b;
    }
    function equals(int $a, int $b):bool{
    return ($a===$b)?true:false;
  }


  Classe anonima
  antes do php 7
  ex:
    $carro = new Carro();
    echo $carro->getName();

  depois do php 7
  ex:
    $carro = new class{
    public function getName(){
     return "nome carro";
  }
   echo $carro ->getName();
  }


  ex :
  function criar_carro(){
      return new class{
        public function getName(){
        return "caaro ";
        }
    };
  }
  $carro = criar_carro();
   echo $carro->getName();

  ---------------------

  Operador null

  pode substituir uma das formas de verificar se algo esta vazio

  $nome = (isset($array['nome']))?$array['nome']:'';

  //com o php 7
  $nome = $array['nome'] ?? '';

  --------------------------

  Operador SpaceShip
  É possivel fazer 3 comparações com uma unica linha de codigo

  $a = 10;
  $b = 20;
  $r = $a <=> $b;

  $r == 0 -> quando os valores forem iguais
  $r == -1 -> $a é menor que $b
  $r == 1 -> $a é maior que $b


  -------------------------------
  ThrowableErros
    permite que vc possa capturar erros, inclusive erros de sintaxes
    Somente com Exception não é possivel

    try{

  }catch(Throwable $e){
  echo "Erro:".$e->getMessage();
  echo "Erro> ".$e->getFile();
  echo "Erro: ".$e->getLine();
}
  com throwable é possível pegar onde está o arquivo
  e qual a linha

  não para a execução do codigo

--------------------------------
  Array em constantes

  define("CONFIG", array(
  'dbname' => 'banco',
  'dbuser' => 'dbuser',
  'dbpass' => 'dbpass'
  ))


 -----------------------------------------
  depreciações

  métodos com o mesmo nome da classe não são mais considerados construtores
  nas futuras versões do php
  necessario utilizar
  function __construct(){}

  utilizar metodos não estaticos de forma estatica

  class Carro{
      function rodar(){
      echo "vrumm!";
    }
  }
  Carro::rodar(); deprecated

  para isso é preciso usar public static function

  mysql_connect - não existe mais
    por isso usar o PDO ou mysqli




  */

 ?>
