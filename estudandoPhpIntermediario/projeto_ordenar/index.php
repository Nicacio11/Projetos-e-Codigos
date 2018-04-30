<?php
	try{
		$pdo = new PDO("mysql:dbname=projeto_ordenar;host=127.0.0.1","root","");

	}catch(PDOException $e){
		echo "Erro :".$e->getMessage();
		exit;
	}
	$sql="";
	if(isset($_GET['ordem']) && empty($_GET['ordem'])==false){
		$ordenacao = addslashes($_GET['ordem']);
		$sql = "SELECT * FROM users ORDER BY ".$ordenacao;
	}
	else{
		$ordenacao="";
		$sql = "SELECT * FROM users";
	}
?>
<form method="get">
	<select name="ordem" onchange="this.form.submit()">
		<option></option>
		<option value="nome" <?php echo($ordenacao=="nome")?'selected="selected"':'' ?> >Pelo nome</option>
		<option value="idade" <?php echo($ordenacao=="idade")?'selected="selected"':'' ?>>Pela idade</option>
	</select>
</form>
<table border="1" width="400">
	<tr>
		<th>Nome</th>
		<th>Idade</th>
	</tr>
	<?php

		$sql = $pdo->query($sql);

		if($sql->rowCount()>0){
			foreach($sql->fetchAll() as $usuario):
			?>
				<tr>
					<td><?php echo $usuario['nome'];?></td>
					<td><?php echo $usuario['idade'];?></td>
				</tr>
			<?php
			endforeach;
		}

	?>
</table>