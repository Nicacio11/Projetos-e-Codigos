<?php
	if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
		$nome = addslashes($_POST["nome"]);
		$email = addslashes($_POST["email"]);
		$msg = addslashes($_POST["mensagem"]);


		$para = "vitornicacio10@hotmail.com";

		$assunto = "Aprendendo a enviar pelo php";
		$corpo = "Nome :".$nome." - E-mail: ".$email." - Mensagem: ".$msg;

		$cabecalho = "From: vitornicacio10@hotmail.com"."\r\n"."Reply-To".$email."\r\n"."X-Mailer: PHP/".phpversion();


		mail($para, $assunto, $corpo, $cabecalho);
		echo "<h2>Email enviado com sucesso</h2>";
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post">
			Nome:<br/><br/>
			<input type="text" name="nome"/><br/>


			Email :<br/><br/>
			<input type="email" name="email"/><br/><br/>

			Mensagem: <br/><br/>
			<textarea name="mensagem"></textarea><br/><br/>

			<input type="submit" name="" value="Enviar">


		</form>
	</body>
</html>