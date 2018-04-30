<?php
	require "classes/email.php";
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$email = new Email($_POST['assunto'],$_POST['nome'], $_POST['email'], $_POST['mensagem']);

		$email->enviar();
		?>
			<div class="alert alert-success fade in">
				<!--Para deixar o alerta com o x para fechar coloca uma class com close
				o data-dismiss vai dizer o q vai ser fechado
				aria-label com close
				e o &times; é uma codifiação unicode que vai fazer ao passaro mouse o x ficar como se estivesse selecionado
				o fade in faz com que ao ser fechado saia aos poucos
				-->
				<a href="#" class="close" data-dismiss="alert" aria-lable="close">&times;</a>
				E-mail enviado com sucesso!!
			</div>
	<?php
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contato</title>
		
		<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no"> 
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
			<script type="text/javascript" src="assets/js/jquery.min.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="assets/css/projeto-html.css">

		<meta charset="utf-8">
	</head>
	<body>
		<div class="topo">
			<div class="topoint">
				<div class="logomarca">Nicácio</div>
				<div class="menu">
					<ul>
						<li><a href="index.php" class="ativado">Home</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Informações</a></li>
						<li><a href="#">Contato</a></li>
						<li><a href="../../">Site Inicial</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="contato" style="margin-bottom: 0;">
			<form method="post" class="form">
				<input type="text" name="assunto" placeholder="Assunto" required><br/>
				<input type="text" name="nome" placeholder="Nome" required><br/>
				<input type="email" name="email" email="Email" placeholder = "Email"required><br/>
				Mensagem:<br/>
				<textarea name="mensagem" required="" value="">
					
				</textarea><br/><br/>

				<input type="submit" name="enviar" value="Enviar"/>
			</form>
		</div>
		<div class="rodape">
			<p>Direitos Reservados | Vitor Nicácio dos Santos</p>
		</div>
	</body>
</html>