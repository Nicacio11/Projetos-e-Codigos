<?php 
	require "config.php";
	if ((isset($_POST['nome']) && !empty($_POST['nome'])) && (isset($_POST['comentario']) && !empty($_POST['comentario']))) {
		$nome = addslashes($_POST['nome']);
		echo $data;
		$comentario = addslashes($_POST['comentario']);

		$sql = "INSERT INTO mensagens SET nome = '$nome', data_comentario = NOW(), comentario = '$comentario'";
		$sql = $pdo->query($sql);
		header('Location: index.php');
	}
?>
<fieldset>
	<form method="post">
		Nome:<br/>
		<input type="text" name="nome">
		<br/><br/>
		<textarea name="comentario"></textarea>
		<br/><br/>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</fieldset>
<?php 
	$sql = "SELECT * FROM mensagens ORDER BY data_comentario DESC";
	$sql = $pdo->query($sql);

	if($sql->rowCount()>0){
		foreach($sql->fetchAll() as $comentario):
		?>
			<strong><?php echo $comentario['nome'];?></strong><br/>
			<?php echo $comentario["data_comentario"];
			echo "<br/>";
			echo $comentario['comentario'];
			;?>
			<hr/>
		<?php
		endforeach;
	}else{
		echo "Não há mensagem";
	}
	//echo"<strong>".."</strong>"
?>