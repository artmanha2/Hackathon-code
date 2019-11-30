<?php
session_start();
ob_start();
$btnCadUsuarioAD = filter_input(INPUT_POST, 'btnCadUsuarioAD', FILTER_SANITIZE_STRING);
if($btnCadUsuarioAD){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	
    $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_admin = "INSERT INTO BAKOFTECA (nome, usuario, senha) VALUES (
                    '" .$dados['nome']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_admin = mysqli_query($conn, $result_admin);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "ADMIN cadastrado com sucesso";
		header("Location: Administrador.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
}
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
                <center><h3>BAKOFTEC -> CADASTROS_AD</h3></center>
            </div>
        </header>
        
        <center>
            <h3><p class="text-success">Insira as informações da Venda!</p></h3>
            <form method="POST" action="">
            
                <h5>Nome</h5><input type="text" name="nome" placeholder="Nome"><br>
                
                <h5>Usuário</h5><input type="text" name="usuario" placeholder="Usuário"><br>
            
                <h5>Senha</h5><input type="password" name="senha" placeholder="Senha"><br><br>
            
                <input type="submit" name="btnCadUsuarioAD" value="Cadastrar"> <a href = Administrador.php>   Voltar </a>
            </form>
        </center>
        
    
    </body>

</html>