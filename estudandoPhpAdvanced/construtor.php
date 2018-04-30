<?php
	//construtor é basicamente o primeiro método a ser executado após a classe ser executado
	class Post{
		private $titulo;
		private $data;
		private $corpo;
		private $comentarios;

		//construtor
		public __construct($titulo, $data, $corpo, $comentario){
			$this->setTitulo($titulo);
			$this->setData($data);
			$this->setCorpo($corpo);
			$this->setComentarios($comentario);

		}
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