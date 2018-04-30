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

 //isset() retorna true ou false - se a variavel foi setada ou não
 //empty() retorna true ou false - verifica se está vario ou não
?>
<html>
    <head>
        <title>Recebendo dados</title>
    </head>
    
    <body>
        <form method="POST">
            Email:<br>
            <input type="email" name="email" required="true" placeholder="Email" /><br><br>
            Senha<br>
            <input type="password" name="senha" required="true" placeholder="Senha" /><br><br>
            <input type="submit" value="Entrar" />
        </form>
    </body>
</html>



