<?php

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    file_put_contents("teste.txt", $nome, FILE_APPEND);
    header("Location: antif5.php");
}
?>
<form id="" name="" method="post">
    <input type="text" name="nome" id="nome"/>
    <input type="submit" name="enviar" id="enviar" value="Enviar"/>
</form>