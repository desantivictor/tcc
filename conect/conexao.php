<?php
$servername = "localhost";
$database = "melhor_amigo";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

class Conexao{
    private $host;
    private $usuario;
    private $senha;
    private $banco;
    private $conexao;

    function __construct($host,$usuario,$senha,$banco)
    {
        $this->host=$host;
        $this->banco=$banco;
        $this->usuario=$usuario;
        $this->senha=$senha;
    }

    function conectar(){
        $this->conexao = mysqli_connect(
            $this->host,
            $this->banco,
            $this->usuario,
            $this->senha
        );

        if ($this->conexao->connect_error) {
            error_log('Connection error: ' . $this->conexao->connect_error);
            return false;
        } else {
            mysqli_query($this->conexao,"SET NAMES 'utf-8'");
            return true;
        }
    }

    function executarQuery($sql){
        return mysqli_query($this->conexao,$sql);
    }

    function obtemNumeroLinhas($query){
        $linhas = $this->executarQuery($query);
        return $linhas->num_rows;
    }
}
?>