<?php
require_once 'repositorioCliente.php';

    $repositorio = new repositorioClienteMySQL();
    $email_usuario = $_POST['email'];
    $senha_usuario = $_POST['senha'];

    echo $email_usuario;
    echo $senha_usuario;