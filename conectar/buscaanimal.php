<?php
include_once 'conexao.php';

$testeanimal = "select count(id_animal) from animal";
$run_teste = mysqli_query ($conexao,$testeanimal);
$animais = mysqli_fetch_array($run_teste, MYSQLI_ASSOC);

$animal_id = 1;

$sel_log = "select * from animal where id_animal = '$animal_id'";
$run_log = mysqli_query ($conexao, $sel_log);
$animal_log = mysqli_fetch_array($run_log, MYSQLI_ASSOC);