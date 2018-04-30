<?php 
	session_start();
	require "config.php";

	if(!empty($_GET['codigo'])){
		$codigo = addslashes($_GET['codigo']);
		$sql = "SELECT * FROM usuarios WHERE codigo='$codigo'";

		$sql = $pdo->query($sql);

		if($sql->rowCount()==0){
		
			header("Location: login.php");
			exit;
		}

	}else{
			header("Location: login.php");
			exit;
		}

	if(!empty($_POST['email'])  && !empty($_POST['senha'])){


		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));


		$sql = "SELECT * FROM usuarios WHERE email ='$email'";

		$sql = $pdo->query($sql);

		if($sql->rowCount<=0){
			$codigo= md5(rand(0,99999).rand(0,99999));
			$sql = "INSERT INTO usuarios (email, senha, codigo) values ('$email', '$senha', '$codigo')";

			$sql = $pdo->query($sql);
			
			unset($_SESSION['id']);
			header("Location: login.php");
			exit;

		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<div class = "login">
			<form method="post">
				<h2>Cadastrar</h2>
				<br>
				<input type="email" name="email" placeholder="Email" autofocus /><br/><br/>
				<input type="password" name="senha" placeholder="Senha" /><br/><br/>

				<input type="submit" name="enviar" value="Cadastrar"/>
			</form>
		</div>

	</body>
</html>