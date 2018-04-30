<?php

	class Animal{
		public function getNome(){
			echo "getNome da classe animal";
		}
	}	

	class Cachorro extends Animal{

		public function getNome(){
			echo "get da classe cachorro";
		}
	}
?>