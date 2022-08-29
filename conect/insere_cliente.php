<?php

require_once 'repositorioCliente.php';
$repositorio = new RepositorioClienteMySQL();

$nome_usuario =$_POST['nome'];
$email_usuario = $_POST['email'];
$senha_usuario = $_POST['senha'];

$numeroLinhas = $repositorio->Loginusuario($email_usuario,$senha_usuario);
if($numeroLinhas == 1){
    session_start();
    $mensagem = "Email já cadastrado!!!!";
    $_SESSION['mensagem']=$mensagem;
    header('Location: cadastrar_cliente.php');
} else {
    $usuarioNovo = new usuarios(NULL,$nome_usuario,$email_usuario,$senha_usuario,$tipo_usuario);
    $cadastra_usuario = $repositorio->Cadastrausuario($usuarioNovo);
    header('Location: index.html');
}
