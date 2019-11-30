<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>BACKOFTEC - Loguinuser</title>
    </head>
    <body>
        <h2>Loguin Usuários</h2>
        <?php
            if(isset($_SESSION['msg'])){
                echo$_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="valida.php">
            
            <input type="number" name="cpf" placeholder="Insirá seu CPF"><br><br>
            
            <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
            <input type="submit" name="btnLogin" value="Acessar">
        
        
        </form>
    </body>



</html>