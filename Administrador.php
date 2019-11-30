<?php
session_start();
include_once("conexao.php");
echo"Olá ".$_SESSION['nome'].", Bem Vindo! <br>";
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
                <center><h5>BAKOFTEC TRANSPORTES</h5></center>
            </div>
        </header>
        <center>
            <form method="get" action="http://inf.fw.iffarroupilha.edu.br/~vitor.schneider/BAKOFTEC/cadastraruser.php"><button class="btn btn-primary" type="submit"> Cadastrar Motorista </button></form>
        
            
            <form method="get" action="http://inf.fw.iffarroupilha.edu.br/~vitor.schneider/BAKOFTEC/cadastraradmin.php"><button class="btn btn-warning" type="submit"> Cadastrar ADMINISTRADOR </button></form>
            
            
             <form method="get" action="http://inf.fw.iffarroupilha.edu.br/~vitor.schneider/BAKOFTEC/cadastraruser.php"><button class="btn btn-primary" type="submit"> Cadastrar vendas </button></form>
            
            <form method="get" action="http://inf.fw.iffarroupilha.edu.br/~vitor.schneider/BAKOFTEC/cadastraradmin.php"><button class="btn btn-warning" type="submit"> Vendas </button></form>
            
             <form method="get" action="http://inf.fw.iffarroupilha.edu.br/~vitor.schneider/BAKOFTEC/cadastraruser.php"><button class="btn btn-primary" type="submit"> Cadastrar Motorista </button></form>
            
            <form method="get" action="http://inf.fw.iffarroupilha.edu.br/~vitor.schneider/BAKOFTEC/cadastraradmin.php"><button class="btn btn-warning" type="submit"> Cadastrar ADMINISTRADOR </button></form>
        </center>
    </body>

       
</html>