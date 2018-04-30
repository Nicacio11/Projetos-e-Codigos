<?php
	//abstract protected
	abstract class Animal{
		private $nome;
		private $idade;
		abstract protected function andar();
	}

	class Gato extends Animal{
		private $quantidadeDePatas;
		private $tipoDePelo;
		
		//@override
		public function andar(){

		}
	}

	class Cavalo extends Animal{
		private $quantidadeDePatas;
		private $miado;
		//@override
		public function andar(){

		}	
	}
  ?>