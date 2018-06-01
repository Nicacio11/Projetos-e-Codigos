<?php
  declare(strict_types=1);
//forma mais usada
//Nada mais é que salvar os dados normalmente em um arquivo no servidor para poder acessar quando quiser
//json_encode = transforma um array em json
//json_decode = transforma um json array no php

  class Cache{
    private $cache;

    //setando valor
    public function setVar(string $nome , string $valor): void{

      //recuperando o cache salvo
      $this->readCache();
      $this->cache->$nome=$valor;
      $this->saveCache();
    }

    //pegando valor
    public function getVar(string $nome):string{
      $this->readCache();
      return $this->cache->$nome;
    }

    //lendo o cache do arquivo
    private function readCache(): void{
      //stdClass é uma classe predefinido ou dinamica
      $this->cache = new stdClass();
      if(file_exists('cache.cache')){
        $this->cache = json_decode(file_get_contents('cache.cache'));
      }
    }
    private function saveCache(): void{
      file_put_contents("cache.cache", json_encode($this->cache));
    }

  }

  $cache = new Cache();
  $cache->setVar("nome", "Vitor");
  $cache->setVar("idade", "22");
  print_r($cache);
?>
