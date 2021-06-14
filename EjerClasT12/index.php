<!DOCTYPE html>

<?php
  include('sesion.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>newsapi</title>
</head>

    <nav class="menu">
    <label class="logo"> NewsApi </label>
    </nav>
    <section class="intermedia">
    Intermedia
    </section>

<body>


    <section class="intermedia">
    <br>
    <form action="articulos.php" method="post">
    <input type="text" name="txtbuscar" placeholder="Escribe aqui">
    <input type="date" value="txtfecha">
    <input type="submit" value="buscar">

    </section>

    <?php
    include('articulo.php')
    ?>
</body>
</html>