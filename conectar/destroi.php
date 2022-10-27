<?php
session_start();
$_SESSION['log']="";
session_destroy();
header("location:../index.php");

?>