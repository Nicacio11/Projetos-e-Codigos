<?php

class NotFoundController extends Controller {

    public function index(){
      $data = array();
      $this->loadView('404', $data);
    }
}

?> 
