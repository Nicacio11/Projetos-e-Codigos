<?php

	/*Basicamente é uma classe que vai servir de um template para outra classe
		precisam ter todos metodos publicos e sem bloco de comando
		Não pode ser instanciada
		para uma classe implementar a interface é preciso colocar implements
		
	*/

	interface Pessoa{
		
		public function andar();
		public function correr();
		public function comer();
	}
?>