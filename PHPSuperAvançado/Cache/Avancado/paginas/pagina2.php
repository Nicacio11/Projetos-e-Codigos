<html>
  <head>
    <title>Pagina de teste</title>
  </head>
  <body>
    <?php
      try{
        $pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "");

        $sql = "SELECT * FROM posts ORDER BY RAND()";

        $sql = pdo->query($sql);

        foreach($sql->fecthAll() as $noticia){
          $cor = rand(0, 999999);
          $len = rand(0, 100);
          ?>
          <div style="width:100px;float:left;margin:20px;background-color:#<?php echo $cor;?>">
            <strong><?php echo $noticia['titulo'];?></strong>
            <?php echo substr($noticia['corpo'], 0, $len);?>
          </div>
        }
      }
    ?>
  </body>
</html>
