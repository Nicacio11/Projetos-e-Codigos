<?php
  class Core{
    public function run(){
      $url = '/';
      $params = array();

      //pegando a urldecode
      if(isset($_GET['url'])){
        $url.= $_GET['url'];
      }

      //caso a url não esteja vazia e for diferente de /

      if( !empty($url) && $url != '/'){

        //explode transforma string rm array e divide
        $url = explode('/', $url);

        array_shift($url);

        //pegando o controlador
        $currentController = $url[0].'Controller';

        array_shift($url);

        //pegando a action ou método
        if(isset($url[0]) && !empty($url[0])){
          $currentAction = $url[0];
          array_shift($url);
        }else{
          $currentAction = 'index';
        }


        if(count($url)>0){
          $params = $url;
        }


      }else{
        $currentController = 'homeController';
        $currentAction = 'index';
      }

      $c = new $currentController();
      call_user_func_array(array($c, $currentAction), $params);
    }
  }
 ?>
