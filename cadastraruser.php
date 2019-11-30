<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	
    $dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO BAKOFTEC (nome, email, celular, cpf, rg, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
                    '" .$dados['celular']. "',
                    '" .$dados['cpf']. "',
                    '" .$dados['rg']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
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
        <title>BAKOFTEC - Cadastros</title>
    
    </head>
    <body>
         <header>
            <div class="p-3 mb-2 bg-secondary text-white">
                <center><h3>BAKOF TEC - CADASTROS</h3></center>
            </div>
        </header>
        
        <center>
            <h3><p class="text-success">Insira as informações do motorista!</p></h3>
            <form method="POST" action="">
            
                <h5>Nome</h5><input type="text" name="nome" placeholder="Nome completo"><br>
            
                <h5>E-mail</h5><input type="email" name="email" placeholder="E-mail"><br>
            
                <h5>Celular</h5><input type="tel" name="celular" placeholder="Telefone / Celular"><br>
            
                <h5>CPF</h5><input type="number" name="cpf" placeholder="CPF"><br>
            
                <h5>RG</h5><input type="number" name="rg" placeholder="RG"><br>
            
                <h5>Senha</h5><input type="password" name="senha" placeholder="Senha"><br><br>
            
                <input type="submit" name="btnCadUsuario" value="Cadastrar"><a href = Administrador.php>   Voltar </a>
            </form>
        </center>
        
    
    </body>

</html>