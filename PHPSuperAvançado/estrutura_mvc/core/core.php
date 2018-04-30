<?php
 class Core{
    public function run(){
      $url ='/';
      $params = array();
      //pegando a url
      if(isset($_GET['url'])){
        $url .= $_GET['url'];
      }
      //caso a url não esteja vazia e for diferente de /
      if( !empty($url) && $url != '/'){
        //transforma string em um array - divide
          $url = explode('/', $url);

          //remove o primeiro item do array
          array_shift($url);

          //pegando o controlador
          $currentController= $url[0].'Controller';
          //remove o primeiro item do array
          array_shift($url);

          $params = array();
          //pegando a action ou método
          if(isset($url[0]) && !empty($url[0])){
            $currentAction = $url[0];
            array_shift($url);
          }else{
            $currentAction = 'index';
          }

          if(count($url) > 0){
            $params = $url;
          }
          //print_r($url);

      }else{
        $currentController = 'homeController';
        $currentAction = 'index';
      }

      $c = new $currentController();


      call_user_func_array(array($c, $currentAction),$params);

      /*echo '<hr/>';
      echo 'Controller :'.$currentController;
      echo '<br/>Action: '.$currentAction;
      echo '<br/>Params: '.print_r($params, true);*/
    }
 }
 ?>
