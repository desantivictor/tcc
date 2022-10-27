<?php

include_once 'conexao.php';

$login = $_POST['email'];
$senha = base64_encode($_POST['senha']);

$sqlstring = "select * from usuario where email_usuario = '$login' AND senha_usuario='$senha'";

$info = mysqli_query($conexao, $sqlstring);

$registro = mysqli_num_rows($info);

if ($registro == 1){
    $sel_user = "select * from usuario where email_usuario = '$login'";
    $run_user = mysqli_query ($conexao, $sel_user);
    $usuario_log = mysqli_fetch_array($run_user, MYSQLI_ASSOC);
    
    session_start();
    
    $_SESSION['usuario'] = $usuario_log;
    $_SESSION['log'] = "Ativo";
    
    header("Location:../index.php");

} else {

    echo "Usuario não encontrado!!!";
    header ("<Location:../pages/login.php");

}