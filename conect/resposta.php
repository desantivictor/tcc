<?php 

if(!isset($_SESSION)) session_start();

if(!isset($_SESSION['nome']) or !isset($_SESSION ['senha'])){

    SESSION_DESTROY();
    header("location: index.html");
}
echo "seja bem vindo!!!";
echo "nome: ".$_SESSION['nome'];
echo "  senha: ".$_SESSION['senha'];
?>
<a href="logout.php">    LOGOUT</a>