<?php 
	session_start();
	require "config.php";

	if(empty($_SESSION['id'])){
		header('Location: login.php');
		exit;
	}
		$email ='';
		$codigo = '';
		$idd = addslashes($_SESSION['id']);
		$sql = "SELECT email, codigo FROM usuarios WHERE id='$idd'";

		$sql = $pdo->query($sql);

		if($sql->rowCount()>0){
			$info = $sql->fetch();

			$email = $info['email'];
			$codigo = $info['codigo'];

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pagina Inicial</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<h1>Area Restrita</h1>
		<hr>
		<p>Email:<?php echo $email; ?> - <a href="sair.php">Sair</a><br/></p>

		<p>Link:http://localhost/estudandoPhpIntermediario/projeto_registroporconvite?cadastro.php/codigo=<?php echo $codigo; ?></p>
	</body>
</html>

