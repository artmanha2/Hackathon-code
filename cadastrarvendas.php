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
        <title>BAKOFTEC - Cadastros_AD</title>
    
    </head>
    <body>
         <header>
            <div class="p-3 mb-2 bg-secondary text-white">
                <center><h3>BAKOF TEC - Vendas</h3></center>
            </div>
        </header>
        
        <center>
            <h3><p class="text-success">Insira as informações da Venda!</p></h3>
            <form method="POST" action="">
            
                <h5>Nome do Comprador</h5><input type="text" name="" placeholder="Nome Completo"><br><br>
                
                <h5>CPF</h5><input type="number" name="" placeholder="CPF"><br><br>
                
                <h5>CEP</h5><input type="number" name="" placeholder="CEP"><br><br>
                
                <h5>Modelos</h5><input type="checkbox" name="" placeholder="Produtos">   <input type="checkbox" name="" placeholder="Produtos">     <input type="checkbox" name="" placeholder="Produtos"><br><br>
            
                <h5>Quantidade</h5><input type="number" name="" placeholder="Quantidade"><br><br>
                
                <h5>Data da Venda</h5><input type="date" name="" placeholder="dd/mm/aaaa"><br><br>
                

                
            
                <input type="submit" name="btnCadUsuarioAD" value="Cadastrar"> <a href = Administrador.php>   Voltar </a>
            </form>
        </center>
        
    
    </body>

</html>