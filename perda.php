<?php
session_start();
$btnLoginB = filter_input(INPUT_POST, 'btnLoginB', FILTER_SANITIZE_STRING);
$_SESSION['msg1'] = name['valer'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport", content="width=device-width, initial-scale=1.0" />
        <link href= "css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script href= "text/javascript" src="js/bootstrap.min.js" ></script>
        <title>BACKOF TEC - perda</title>
    </head>
    <body>
        <header>
           <div class="p-3 mb-2 bg-secondary text-white">
                <center><h5>BAKOF TEC - Perda de Carga</h5></center>
            </div>
        </header>
        <center>
            <h2>Perda de material</h2>
            <?php
                if(isset($_SESSION['msg'])){
                    echo$_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <form method="POST" action="valida.php">
            
                <input type="text" name="valer" placeholder="Qual material foi perdido?"><br><br>
                
                <input type="button" name="btnLoginB" value="Enviar para Fábrica"> <a href = usuarios.php>   Voltar </a>
            
                
        
        
            </form>
        </center>    
    </body>



</html>