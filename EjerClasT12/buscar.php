<?php
session_start();
if($_POST['txtbuscar']!=''){ //si ya tecleo texto
    $_SESSION['clave']=$_POST['txtbuscar'];
}

if($_POST['txtfecha']!=''){ //si ya tecleo fecha
    $_SESSION['fecha']=$_POST['txtfecha'];
}

header("Location: index.php");

?>