<?php
  //Singleton
  //Utilizado quando um objeto precisa ser unico mesmo que seja instanciado outro objeto os dados serão unicos


  class Pessoa{
    private $nome;
    //criar um metodo publico e static que retorne essa instanciado

    public static function getInstance(){
      //definindo a variavel como static quer dizer que mesmo ao sair do escopo ela manterá o seu valor então sempre retornará uma pessoa
      static $instance = null;
      //se tiver nulo então é a primeira vez que é utilizado
      if($instance === null){
          $instance = new Pessoa();
      }
       return $instance;
    }

    //colocando o construtor privado vc impede que nenhum outra  variavel instancie o objeto
    private function __construct(){

    }
    public function setNome(string $nome):void{
      $this->nome=$nome;
    }
    public function getNome(): string{
      return $this->nome;
    }

  }

  $cara = Pessoa::getInstance();
  $cara->setNome("Singleton");
  $cara2 = Pessoa::getInstance();
   echo $cara->getNome();
   echo $cara2->getNome();
   //podemos utilizar o padrão de projetos singleton para conexões com o banco, apenas temos que ter cuidado com  a concorrencia
?>
