<?php
	require "config.php";

	if( (isset($_POST['nome']) && empty($_POST['nome'])==false) && (isset($_POST['email']) && empty($_POST['email'])==false) && (isset($_POST['senha']) && empty($_POST['senha'])==false) )  	 {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha = '$senha'";

		$sql = $pdo->query($sql);

		echo "Usuario cadastrado numero ".$pdo->lastInsertId()." com sucesso";

		header("Location: index.php");
	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Cadastrar Usuario</title>
	</head>
	<body>
		<form method="POST">
			Nome:<br/>
			<input type="text" name="nome" required /><br/><br/>
			E-mail:<br/>
			<input type="email" name="email" required /><br/><br/>
			Senha:<br/>
			<input type="password" name="senha" required/><br/><br/><br/>
			<input type="submit" name="enviar" value="Cadastrar"/>
		</form>
	</body>
</html>