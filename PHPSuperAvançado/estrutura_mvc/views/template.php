<html>
  <head>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css">
  </head>
  <body>
    <h1>Este e o topo</h1>
    <hr/>
    <a href="<?php echo BASE_URL;?>">Home</a>
    <a href="<?php echo BASE_URL;?>galeria">Galeria</a>
    <?php $this->loadInTemplate($viewName, $viewData); ?>
  </body>
</html>
