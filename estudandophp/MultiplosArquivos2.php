<?php
    if(isset($_POST['email']) && empty($_POST['email'])==false)
    {
        if(isset($_POST['senha']) && empty($_POST['senha'])==FALSE)
        {
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            echo "Meu email eh: ".$email." e sua senha eh: ".$senha;
        }
    }
?>