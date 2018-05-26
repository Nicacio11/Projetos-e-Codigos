<?php

 function create(){
   return new class{
     public function getNome(): string{
       return "Teste que vai funcionar hehe!";
     }
   };
 }

 $teste = create();
 echo $teste->getNome();
 ?>
