<?php
session_start();
include_once("conexao.php");
$btnLoginA = filter_input(INPUT_POST, 'btnLoginA', FILTER_SANITIZE_STRING);
if($btnLoginA){
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    if((!empty($usuario)) AND (!empty($senha))){
        //echo password_hash($senha, PASSWORD_DEFAULT);
        $result_usuario = "SELECT ID, nome, senha FROM BAKOFTECA WHERE usuario='$usuario'
        LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if($resultado_usuario){
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            if(password_verify($senha, $row_usuario['senha'])){
                $_SESSION['ID'] = $row_usuario['ID'];
                $_SESSION['nome'] = $row_usuario['nome'];
                
                header("Location: Administrador.php");
            }else{
                $_SESSION['msg'] = "Usuário ou Senha Invalidos!";
                header("Location: loginadmin.php");   
            }
        }
    }else{
        $_SESSION['msg'] = "Usuário ou Senha Invalidos!";
        header("Location: loginadmin.php");
    }
}else{
    $_SESSION['msg'] = "Usuário ou Senha Invalidos!";
    header("Location: loginadmin.php");
}