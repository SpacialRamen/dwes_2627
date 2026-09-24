<?php
    $nombre = "pablo";
    $apellidos = "bocanegra corrales";
    $edad = 20;
    $poblacion = "prado del rey";
    $casado = false;
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
        //comillas dobles
        echo "<p>Nombre: $nombre</p>";
        //comillas simples
        echo '<p>Nombre: $nombre </p>';
        //solucion uso comillas simples y concatenacion
        echo '<p>Nombre: ' . $nombre . '</p>';
    ?>
</body>
</html>