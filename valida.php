<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    if((!empty($cpf)) AND (!empty($senha))){
        //echo password_hash($senha, PASSWORD_DEFAULT);
        $result_cpf = "SELECT ID, nome, rg, email, celular, senha FROM BAKOFTEC WHERE cpf='$cpf'
        LIMIT 1";
        $resultado_cpf = mysqli_query($conn, $result_cpf);
        if($resultado_cpf){
            $row_cpf = mysqli_fetch_assoc($resultado_cpf);
            if(password_verify($senha, $row_cpf['senha'])){
                $_SESSION['ID'] = $row_cpf['ID'];
                $_SESSION['nome'] = $row_cpf['nome'];
                
                header("Location: usuarios.php");
            }else{
                $_SESSION['msg'] = "Usuário ou Senha Invalidos!";
                header("Location: loguinuser.php");   
            }
        }
    }else{
        $_SESSION['msg'] = "Usuário ou Senha Invalidos!";
        header("Location: loguinuser.php");
    }
}else{
    $_SESSION['msg'] = "Usuário ou Senha Invalidos!";
    header("Location: loguinuser.php");
}