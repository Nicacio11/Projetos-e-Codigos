<?php
	/*
		Nada  mais é do que separar o código em pastas imaginarias

	*/
		namespace aplicacao\v1;

		class Sobre{
			public function getVersao(){
				return '1.0';
			}
		}

?>
<?php
		namespace aplicacao\v2;

		class Sobre{
			public function getVersao(){
				return '1.0';
			}
		}
		$variavel = new \aplicacao\v1\Sobre();
		$variavel->getVersao();
?>