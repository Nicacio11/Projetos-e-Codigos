<?php 
	class Email{
		private $codigo;
		private $assunto;
		private $nome;
		private $email;
		private $mensagem;

		public function __construct($assunto,$nome, $email, $mensagem){
			$this->assunto = $assunto;
			$this->nome = $nome;
			$this->email = $email;
			$this->mensagem = $mensagem;
		}

		public function getCodigo(){return $this->codigo;}
		public function getNome(){return $this->nome;}
		public function getEmail(){return $this->email;}
		public function getMensagem(){return $this->mensagem;}
		public function getAssunto(){return $this->assunto;}

		public function setAssunto($assunto){
			$this->assunto=$assunto;
		}
		public function setCodigo($codigo){
			$this->codigo=$codigo;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function setMensagem($mensagem){
			$this->mensagem = $mensagem;
		}
		
		public function enviar(){
			$para = "vitornicacio11@gmail.com";

			$corpo = "Nome :".$this->getNome()." - E-mail: ".$this->getEmail()." - Mensagem: ".$this->getMensagem();

			$cabecalho = "From:.".$this->getEmail()."\r\n"."Reply-To ".$this->getEmail()."\r\n"."X-Mailer: PHP/".phpversion();


			mail($para, 
				$this->getAssunto(), 
				$corpo, 
				$cabecalho
				);
		}
	}
?>