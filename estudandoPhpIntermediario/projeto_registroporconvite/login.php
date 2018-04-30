<?php
	session_start();
	require "config.php";


	if((isset($_POST['email'])&&!empty($_POST['email'])) && (isset($_POST['senha'])&&!empty($_POST['senha']))){
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha ='$senha'";

		$sql = $pdo->query($sql);

		if($sql->rowCount()>0){

			$dado = $sql->fetch();
			$_SESSION['id']=$dado['id'];
			header('Location: index.php');
			exit;
		}


	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Entrar</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<div class = "login">
			<form method="post">
				<h2>Entrar</h2>
				<br>
				<input type="email" name="email" placeholder="Email" autofocus /><br/><br/>
				<input type="password" name="senha" placeholder="Senha" /><br/><br/>

				<input type="submit" name="enviar" value="Entrar"/>
				<a href="cadastro.php">Cadastrar</a>
			</form>
		</div>
	</body>
</html>