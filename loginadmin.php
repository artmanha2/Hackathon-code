<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>BACKOFTEC - LoginADMIN</title>
    </head>
    <body>
        <h2>Loguin Administradores</h2>
        <?php
            if(isset($_SESSION['msg'])){
                echo$_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="validaAD.php">
            
            <input type="number" name="usuario" placeholder="Insirá seu Usuário"><br><br>
            
            <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
            
            <input type="submit" name="btnLogin" value="Acessar">
        
        
        </form>
    </body>



</html>