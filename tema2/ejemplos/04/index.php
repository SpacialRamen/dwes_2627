<?php
    $nombre = "pablo";
    $apellidos = "bocanegra corrales";
    $edad = 20;
    $poblacion = "prado del rey";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Alumnos</title>
</head>
<body>
    <h1>Ficha de Alumnos</h1>
    <!-- muestro los detalles del alumno -->
    <b> Nombre:</b> <?=  $nombre; ?><br>
    <b> Apellidos:</b> <?=  $apellidos; ?><br>
    <b> Edad:</b> <?=  $edad; ?><br>
    <b> Población:</b> <?=  $poblacion; ?><br>
</body>
</html>