<?php
session_start();
include_once 'conexao.php';

if ($_SESSION['usuario'] =! null) {
    $sel_animal1 = "select animal_1 from usuario where id_usuario = 1";
    $run_animal1 = mysqli_query ($conexao, $sel_animal1);
    $animal_id1 = mysqli_fetch_array($run_animal1, MYSQLI_ASSOC);

    $sel_animal2 = "select animal_2 from usuario where id_usuario = 1";
    $run_animal2 = mysqli_query ($conexao, $sel_animal2);
    $animal_id2 = mysqli_fetch_array($run_animal2, MYSQLI_ASSOC);

    $sel_animal3 = "select animal_3 from usuario where id_usuario = 1";
    $run_animal3 = mysqli_query ($conexao, $sel_animal3);
    $animal_id3 = mysqli_fetch_array($run_animal3, MYSQLI_ASSOC);

    $sel_animal4 = "select animal_4 from usuario where id_usuario = 1";
    $run_animal4 = mysqli_query ($conexao, $sel_animal4);
    $animal_id4 = mysqli_fetch_array($run_animal4, MYSQLI_ASSOC);

$nome_animal = $_POST['nome_animal'];
$sexo_animal = $_POST['sexo_animal'];
$porte_animal = $_POST['porte_animal'];
$cidade_animal = $_POST['cidade_animal'];
$data_animal = $_POST['data_animal'];
$sobre_animal = $_POST['sobre_animal'];
$estado_animal = $_POST['estado_animal'];

$consultaanimal = "select * from animal WHERE nome_animal = '$nome_animal'";

$consani = mysqli_query($conexao,$consultaanimal);

if (!$consani){
	die ('Query Invalida!!!'.mysqli_error($conexao));
}

$retornoani = mysqli_num_rows($consani);

echo $retornoani;

if ($retornoani>=1){
	echo "Este nome de animal já existe";
    header("Location:../index.php");
}else{
$sqlinsert = "insert into animal (nome_animal,sexo_animal,porte_animal,cidade_animal,data_animal,descricao_animal,estado_animal,dono) values ('$nome_animal','$sexo_animal','$porte_animal','$cidade_animal','$data_animal','$sobre_animal','$estado_animal','($_SESSION[usuario][id_usuario])')";
    //terminar associação

$resultadoani = mysqli_query($conexao,$sqlinsert);

if (!$resultadoani){
    die ('Query Invalida!!!!!'.@mysqli_error($conexao));
} else {
    echo "Registro Cadastrado com sucesso!!!";

$sel_animal = "select id_animal from animal where nome_animal = '$nome_animal'";
$run_animal = mysqli_query ($conexao, $sel_animal);
$animal_id = mysqli_fetch_array($run_animal, MYSQLI_ASSOC);

}
if ($animal_id4['animal_4'] != 0) {    
    if ($animal_id3['animal_3'] != 0) {    
        if ($animal_id2['animal_2'] != 0) {    
            if ($animal_id1['animal_1'] != 0) {
echo "Você ja registrou seu numero maximo de animais!!!";
header("Location:../index.php");
}  else {$sqlinsert = "update usuario set animal_1 = ($animal_id[id_animal]) where id_usuario = ($_SESSION[usuario][id_usuario])";
$associacao = mysqli_query($conexao,$sqlinsert);
}} else {$sqlinsert = "update usuario set animal_2 = ($animal_id[id_animal]) where id_usuario = ($_SESSION[usuario][id_usuario])";
$associacao = mysqli_query($conexao,$sqlinsert);
}} else {$sqlinsert = "update usuario set animal_3 = ($animal_id[id_animal]) where id_usuario = ($_SESSION[usuario][id_usuario])";
$associacao = mysqli_query($conexao,$sqlinsert);
}} else {$sqlinsert = "update usuario set animal_4 = ($animal_id[id_animal]) where id_usuario = ($_SESSION[usuario][id_usuario])";
    $associacao = mysqli_query($conexao,$sqlinsert);
    //terminar associação
}}} else {
    echo "necessita estar logado primeiro";
    header("Location:../index.php");
}