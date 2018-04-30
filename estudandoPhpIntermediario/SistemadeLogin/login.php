<?php

	session_start();

	if((isset($_POST['email']) && empty($_POST['email'])==false) && (isset($_POST['email']) && empty($_POST['email'])==false) ){
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		require "config.php";
		try{
		$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha = '$senha'";

		$sql = $pdo->query($sql);

		if($sql->rowCount()>0){
			//fetch pega o primeiro resultado.
			$dado = $sql->fetch();

			$_SESSION['id'] = $dado['id'];
			header("Location: index.php");
		}
		else{
			header("Location: login.php");
			echo "Usuario ou senha incorretos";
		}
		}catch(PDOException $e){
			echo "Erro: ".$e->getMessage();
		}
	}

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form method="POST">
			E-mail:<br/>
			<input type="email" name="email" required /><br/><br/>
			Senha:<br/>
			<input type="password" name="senha" required/><br/><br/><br/>
			<input type="submit" name="enviar" value="Cadastrar"/>
		</form>
	</body>
</html>