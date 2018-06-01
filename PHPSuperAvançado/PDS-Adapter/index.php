<?php

  //Padrão Adapter, é como um adaptador
  //um adaptador será como uma extensão da sua classe
  //partindo de um ponto que não temos acesso classe ou não convem edita-la
  //então para isso criamos um adaptador

  class Pessoa{
    private $nome;
    private $idade;

    public function __construct(string $nome, int $idade){
      $this->nome = $nome;
      $this->idade = $idade;
    }

    public function getNome(): string{
      return $this->nome;
    }
    public function getIdade(): int{
      return $this->idade;
    }
  }

  class PessoaAdapter{
    private $sexo;

    //está variavel está reservada para a classe Pessoa que será adaptada
    private $pessoa;

    public function __construct(Pessoa $pessoa){
      $this->pessoa = $pessoa;
    }

    public function getSexo(): string{
      return $this->sexo;
    }
    public function setSexo(string $sexo){
      $this->sexo=$sexo;
    }
    public function getNome():string {
      return $this->pessoa->getNome();
    }
    public function getIdade():int{
      return $this->pessoa->getIdade();
    }


  }
  $pessoa = new Pessoa("Vitor", 22);
  $pessoaAdapter = new PessoaAdapter($pessoa);

  $pessoaAdapter->setSexo("Masculino");


  echo "Nome :".$pessoaAdapter->getNome();
  echo "<br/>Idade :".$pessoaAdapter->getIdade();
  echo "<br/>Sexo :".$pessoaAdapter->getSexo();

?>
