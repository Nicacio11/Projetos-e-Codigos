<?php
		/*require 'Cavalo.php';
		$cavalo = new Cavalo();
		$cavalo->falar();

		require 'Pessoa.php';
		$pessoa = new Pessoa();
		$pessoa->andar();*/

		// agora sem precisar utilizar o require é possivel registrnado o autoload]

		spl_autoload_register(function($class){
			//registrando onde estão as classes que serão usadas
			require 'classes/'.$class.'.php';
		});
		$cavalo = new Cavalo();
		$cavalo->falar();

  ?>