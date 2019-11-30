<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport", content="width=device-width, initial-scale=1.0" />
        <link href= "css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script href= "text/javascript" src="js/bootstrap.min.js" ></script>
        <title>BAKOFTEC</title>

    </head>

    <body>
        <header>
           <div class="p-3 mb-2 bg-secondary text-white">
                <center><h5>BAKOF TEC - TRANSPORTES</h5></center>
            </div>
        </header>
        <center>
            <h3>Localização guiada por satélite</h3>
            <img src="QR.png"><br><br><br>
            <a href="usuarios.php"> Voltar</a>
        </center>
    </body>

       
</html>