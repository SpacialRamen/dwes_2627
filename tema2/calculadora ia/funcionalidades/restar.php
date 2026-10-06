<?php

$valor1 = (float)$_POST['valor1'];
$valor2 = (float)$_POST['valor2'];

$resultado = $valor1 - $valor2;
$operacion = "RESTA";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Calculadora Básica</title>
</head>

<body>

<div class="container">

    <div class="jumbotron">
        <h3><strong>Proyecto 2.1 - Tema 2 DWES</strong></h3>
        <hr>
        <h1>Calculadora Básica</h1>
    </div>

    <label>Valor 1:</label>
    <input type="text"
           class="form-control"
           value="<?php echo number_format($valor1,1,',',''); ?>"
           readonly>

    <br>

    <label>Valor 2:</label>
    <input type="text"
           class="form-control"
           value="<?php echo number_format($valor2,1,',',''); ?>"
           readonly>

    <hr>

    <h4><?php echo $operacion; ?></h4>

    <input type="text"
           class="form-control"
           value="<?php echo number_format($resultado,1,',',''); ?>"
           readonly>

    <br>

    <a href="C:\xampp\htdocs\dwes_2627\tema2\proyecto\index.php" class="btn btn-primary">
        Volver
    </a>

    <hr>

    <p>
        &copy; Pablo Bocanegra - DWES - 2º DAW - Curso 26/27
    </p>

</div>

</body>
</html>