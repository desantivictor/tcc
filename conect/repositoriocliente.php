<?php

require_once 'cliente.php';
require_once 'conexao.php';

interface IRepositorioCliente {
    public function Loginusuario($email_usuario,$senha_usuario);
    public function Cadastrausuario($usuario);
}

class RepositorioClienteMySQL implements IRepositorioCliente
{
    public function Loginusuario($email_usuario,$senha_usuario){
        $sql = "SELECT * FROM usuarios WHERE email_usuario = '$email_usuario' AND senha_usuario = '$senha_usuario'";
        $linha = $this->conexao->obtemNumeroLinhas($sql);
        return $linha;
    }

    public function Cadastrausuario($usuario){
        $id_usuario = $usuario->getIdusuario();
        $nome_usuario = $usuario->getNomeusuario();
        $email_usuario = $usuario->getEmailusuario();
        $senha_usuario = $usuario->getSenhausuario();

        $sql = "INSERT INTO usuario (id_usuario,nome_usuario,email_usuario,senha_usuario) VALUES ('$id_usuario','$nome_usuario','$email_usuario','$senha_usuario')";
        echo $sql;
        $this->conexao->executarQuery($sql);
    }
}