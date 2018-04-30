
<?php
	require "config.php";
	session_start();

	if( isset($_SESSION['banco']) &&!empty($_SESSION['banco'])){

		$id=$_SESSION['banco'];

		$sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();


		if($sql->rowCount()>0){
			$info = $sql->fetch();
		}else{
			header("Location: login.php");
			exit;	
		}
	}else{
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Caixa Eletrônico</title>
	</head>
	<body>	
		<h1>Banco Nicacio</h1>
		Titular: <?php echo $info['titular'] ?><br/>
		Agência: <?php echo $info['agencia'] ?><br/>
		Conta: <?php echo $info['conta'] ?><br/>
		Saldo: <?php echo $info['saldo'] ?><br/>

		<a href="sair.php">Sair</a>

		<hr/>

		<h3>Movimentação/Extrato</h3>

		<a href="add-transacao.php">Adicionar Transação</a>
		<table border="1" width="400">
			<th>Data</th>
			<th>Valor</th>

			<?php

				$sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
				$sql->bindValue(":id_conta", $info['id']);
				$sql->execute();

				if($sql->rowCount() > 0){

					foreach($sql->fetchAll() as $historico){
						?>
							<tr>
								<td><?php echo date('d/m/Y H:i',strtotime($historico['data_operacao']) ); ?> </td>
								<td><?php 
									if($historico['tipo']==0):?>
									<font color ="green"> <?php echo ($historico['valor']);?></font> 
									</td>
									<?php else:?>
									<font color ="red"> <?php echo ($historico['valor']);?></font> 
								<?php endif;?>

							</tr>
						<?php
					}
				}

			?>
		</table>

	</body>
</html>