<?php
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLoguin){
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    if((!empty($cpf)) AND (!empty($senha))){
        echo password_hash($senha, PASSWORD_DEFAULT);
        $result_cpf = "SELECT ID, nome, rg, email, celular, senha FROM BAKOFTEC WHERE cpf='$cpf' LIMIT 1";
        $resultado_cpf = mysqli_query($conn, $result_cpf);
        if($resultado_cpf){
            $row_usuario = mysqli_fetch_assoc($resultado_cpf);
            if(password_verify($senha, $row_usuario['senha'])){
                header("Location: usuarios.php");
            }else{
                $_SESSION['msg'] = "Página não encontrada";
                header("Location: loguinuser.php");   
            }
        }
    }else{
        $_SESSION['msg'] = "Página não encontrada";
        header("Location: loguinuser.php");
    }
}else{
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: loguinuser.php");
}