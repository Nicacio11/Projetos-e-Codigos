<?php
  class Cache{
    private $cache;

    public function setVar(string $valor):void{

      //lendo o cache
      $this->readCache();
      $this->cache/*->$nome*/=$valor;
      $this->saveCache();
    }

  public function getVar(/*string $nome*/){
      $this->readCache();
      return $this->cache/*->$nome*/;
    }

    //função par recupegar o cache
    private function readCache():void{

      $this->cache = new stdClass();
      if(file_exists('cache.cache')){
        $this->cache = file_get_contents('cache.cache');
      }
    }

    //função para salvar no cache em modo json
    private function saveCache():void {
      file_put_contents("cache.cache", $this->cache);
    }

  }
?>
