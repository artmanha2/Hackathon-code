<?php
session_start();
ob_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport", content="width=device-width, initial-scale=1.0" />
        <link href= "css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script href= "text/javascript" src="js/bootstrap.min.js" ></script>
        <title>BAKOFTEC - Info</title>
    
    </head>
    <body>
         <header>
            <div class="p-3 mb-2 bg-secondary text-white">
                <center><h3>BAKOF TEC - Info</h3></center>
            </div>
        </header>
        
        <center>
            <h3><p class="text-success">Insira as informações da Venda!</p></h3>
            <form method="POST" action="">
            
                <h5>Imagem do Comprovante Assinado</h5><input type="search" name="" placeholder="Foto do comprovante"><br><br>
                
                <h5>Hora de Entrega</h5><input type="datetime-local" name="" placeholder="Hora"><br><br>
                
               
                
            
                <input type="submit" name="" value="Enviar para empresa"> <a href = usuarios.php>   Voltar </a>
            </form>
        </center>
        
    
    </body>

</html>