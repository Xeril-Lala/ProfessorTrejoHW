<?php

    session_start();
    if(!isset($_SESSION['clave'])){
        $_SESSION['clave']='deportes';
    }
    if(!isset($_SESSION['fecha'])){
        $_SESSION['fecha']='2021-03-17';
    }

?>