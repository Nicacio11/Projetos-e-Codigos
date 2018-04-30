<?php

	class Post{
		private $titulo;
		private $data;
		private $corpo;
		private $comentarios;

		
		public function getTitulo(){
			return $this->$titulo;
		}

		public function setTitulo($titulo){
			$this->$titulo=$titulo;
		}

		public function getData(){
			return $this->$data;
		}

		public funtion setData($data){
			$this->$data=$data;
		}

		public function setCorpo($corpo){
			$this->$corpo=$corpo;
		}

		public function getCorpo(){
			return $this->$corpo;
		}

		public function setComentarios($comentario){
			$this->$comentarios=$comentarios;
		}
		public function getComentarios(){
			return $this->$comentarios;
		}
	}
?>