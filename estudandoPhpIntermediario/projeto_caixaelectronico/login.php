<?php
	session_start();
	require "config.php";

	if( (isset($_POST['agencia']) && !empty($_POST['agencia'])) && (isset($_POST['conta']) && !empty($_POST['conta'])) &&(isset($_POST['senha']) && !empty($_POST['senha'])) ){

		$agencia = addslashes($_POST['agencia']);
		$conta = addslashes($_POST['conta']);
		$senha = md5(addslashes($_POST['senha']));


		$sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
		$sql->bindValue(":agencia", $agencia);
		$sql->bindValue(":conta", $conta);
		$sql->bindValue(":senha", $senha);
		$sql->execute();
		//$sql = $pdo->query($sql);


		if($sql->rowCount()>0){
			$dados = $sql->fetch();
			$_SESSION['banco'] = $dados['id'];
			header("Location: index.php");
			exit;
		}
	}

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Caixa Eletrônico</title>
	</head>
	<body>	
		<form method="post">
			Agência: <br/>
			<input type="text" name="agencia"/> <br/><br/>

			Conta: <br/>
			<input type="text" name="conta"/> <br/><br/>

			Senha: <br/>
			<input type="password" name="senha"><br/>
			<input type="submit" name="" value="Entrar">
		</form>

	</body>
</html>