<?php
	require "config.php";
	if(isset($_GET['id']) && empty($_GET['id']) ==false){
		$id = addslashes($_GET['id']);
	}
	if( (isset($_POST['nome']) && empty($_POST['nome'])==false) && (isset($_POST['email']) && empty($_POST['email'])==false) && (isset($_POST['senha']) && empty($_POST['senha'])==false) )  	 {
		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "UPDATE usuarios SET nome='$nome', email='$email', senha = '$senha' WHERE id='$id'";

		$sql = $pdo->query($sql);

		//echo "Usuario cadastrado numero ".$pdo->lastInsertId()." com sucesso";

		header("Location: index.php");
	}

		$sql = "SELECT * from usuarios WHERE id = '$id'";

		$sql = $pdo->query($sql);

		if($sql->rowCount()>0){
			$dado = $sql->fetch();
		}else{
			header("Location: index.php");
		}	
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Editar Usuario</title>
	</head>
	<body>
		<form method="POST">
			Nome:<br/>
			<input type="text" name="nome" value="<?php echo $dado['nome']; ?>" required /><br/><br/>
			E-mail:<br/>
			<input type="email" name="email" value="<?php echo $dado['email']; ?>" required /><br/><br/>
			Senha:<br/>
			<input type="password" name="senha" value="" required/><br/><br/><br/>
			<input type="submit" name="enviar" value="Atualizar"/>
		</form>
	</body>
</html>