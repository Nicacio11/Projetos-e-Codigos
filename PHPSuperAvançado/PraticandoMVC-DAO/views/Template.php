
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<ul>
			<!--somente para n deixar em branco
			-->
			<li><a href="<?php echo BASE_URL?>home">Home</a></li>
	

		</ul>
    <?php
      $this->loadInTemplate($viewName, $viewData);
    ?>
	</body>
</html>
