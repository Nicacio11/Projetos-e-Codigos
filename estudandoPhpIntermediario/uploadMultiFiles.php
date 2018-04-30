<?php
	
	if(isset($_FILES['arquivo'])){

		if(count($_FILES['arquivo']["tmp_name"])>0){
			for($i = 0; $i<count($_FILES['arquivo']["tmp_name"]); $i++){

				$nomedoarquivo = md5($_FILES['arquivo']["name"][$i].time().rand(0,99)).'.jpg';

				move_uploaded_file($_FILES['arquivo']["tmp_name"][$i], 'ControleDeUsuarios/'.$nomedoarquivo);
				echo "enviados";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="arquivo[]"/ multiple /> <br/><br/>
		<input type="submit" name="enviar" />
	</form>
</body>
</html>