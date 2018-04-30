<?php 
	require "config.php";
	$ordem = "";
	
	if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
		$ordem = addslashes($_GET['ordem']);
		$sql = "SELECT * FROM users ORDER BY ".$ordem;
	}else{
		$sql="SELECT * FROM users";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ordenar</title>
	</head>
	<body>
		<form method="get">
			<select name="ordem" onchange="this.form.submit()">
				<option value="">Ordenar por:</option>
				<option value="nome" <?php echo($ordem=="nome")?"selected='selected'":'' ?>>Nome</option>
				<option value="idade" <?php echo($ordem=="idade")?"selected='selected'":'' ?>>Idade</option>
				<option value="email" <?php echo($ordem=="email")?"selected='selected'":'' ?>>Email</option>
			</select>
		</form>
		<br/>
		<br/>
		<table border="1" width="400">
			<tr>
				<th>Nome</th>
				<th>Idade</th>
				<th>Email</th>
			</tr>
			<?php
				$sql=$pdo->query($sql);
				if($sql->rowCount()>0){
					foreach($sql->fetchAll() as $usuario){
						echo "<tr>";
						echo "<td>".$usuario["nome"]."</td>";
						echo "<td>".$usuario["idade"]."</td>";
						echo "<td>".$usuario["email"]."</td>";
						echo "</tr>";
					}
				}
				
			?>
		</table>
	</body>
</html>