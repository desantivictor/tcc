<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = base64_encode($_POST['senha']);
$nivel = 0;

$consultausuario = "select * from usuario WHERE nome_usuario = '$nome' OR email_usuario = '$email'";

$cons = mysqli_query($conexao,$consultausuario);

if (!$cons){
	die ('Query Invalida!!!'.mysqli_error($conexao));
}

$retorno = mysqli_num_rows($cons);

echo $retorno;

if ($retorno>=1){
	echo "Este nome de usuario já existe";
	header("Location:../index.php");
} else {

$sqlinsert = "insert into usuario (nome_usuario,email_usuario,senha_usuario) values ('$nome','$email','$senha')";

$resultado = mysqli_query($conexao,$sqlinsert);

if (!$resultado){
    die ('Query Invalida!!!!!'.@mysqli_error($conexao));
} else {
    echo "Registro Cadastrado com sucesso!!!";
}

mysqli_close($conexao);
$sel_user = "select * from usuario where email_usuario = '$email'";
$run_user = mysqli_query ($conexao, $sel_user);
$usuario = mysqli_fetch_array($run_user, MYSQLI_ASSOC);

session_start();

$_SESSION['usuario']=$dados;
$_SESSION['log']="Ativo";

header("Location:../index.php");
}