<?php 

	/*criando url amigavel
		É preciso configurar primeiro o apache para aceitar esse tipo de coisa
		também é necessario criar uma arquivo
		.htaccess

		após o apache entrar nessa pasta onde se encontra o arquivo vai percerber o htaccess

		no .htaccess é preciso ligar o Rewrite

		RewriteEngine On

		depois fazer q o Rewrie ignore qualquer url q de para um arquivo real
		e diretórios

		após isso é precso criar uma regra para deixar url amigavel


	*/
		echo print_r($_GET);
		echo "Testando";
?>