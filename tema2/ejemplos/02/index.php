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
    <?php
        // mostrar los valores de las variables en html
        echo "<b>Nombre:</b> $nombre<br>";
        echo "<b>Apellidos:</b> $apellidos<br>";
        echo "<b>Edad:</b> $edad<br>";
        echo "<b>Población:</b> $poblacion<br>";
    ?>
</body>
</html>