<?php

include_once 'conexao.php';

$id = $_GET['id'];

$cons = "select * from categoria where id='$id'";

$query = mysqli_query($conexao,$cons);

$registro=mysqli_fetch_array($query);

echo $registro['foto'];

$sqldelete = "delete from categoria where id = $id";

$resultado = mysqli_query($conexao,$sqldelete);

unlink($registro['foto']);

if (!$resultado){
    die ('Query Invalida!!!!!'.@mysqli_error($conexao));
} else {
    echo "Registro excluido com sucesso!!!";
}
header("Location:principal.php");
mysqli_close($conexao);

