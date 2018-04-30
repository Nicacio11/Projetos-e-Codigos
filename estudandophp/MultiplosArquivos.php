<?php
include "MultiplosArquivos2.php";

/*
 * utilizando o require eu faço a inclusão de um outro arquivo dentro do meu index
 * e então o outro codigo passar a fazer parte também desse codigo
 * da mesma forma o include()
 * a diferença entre um e outro é que 
 * o require caso aconteça um erro na pagina ele para de rodar o codigo
 * o include somente aparece uma mensagem de erro
 *  
 */
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