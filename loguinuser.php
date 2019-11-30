<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport", content="width=device-width, initial-scale=1.0" />
        <link href= "css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script href= "text/javascript" src="js/bootstrap.min.js" ></script>
        <title>BACKOFTEC - Loginuser</title>
    </head>
    <body>
        <header>
           <div class="p-3 mb-2 bg-secondary text-white">
                <center><h5>BAKOFTEC MOTORISTAS</h5></center>
            </div>
        </header>
        <center>
            <h2>Login Usuários</h2>
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
        </center>    
    </body>



</html>