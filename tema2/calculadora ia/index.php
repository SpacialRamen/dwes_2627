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
        <h3><strong>Proyecto - Tema 2 DWES 20/21</strong></h3>
        <hr>
        <h1>Calculadora Básica</h1>
    </div>

    <form method="post">

        <div class="form-group">
            <label>Valor 1:</label>

            <input
                type="number"
                step="0.1"
                name="valor1"
                value="0"
                class="form-control"
                required>

            <small class="text-muted">
                Introduzca primer valor
            </small>
        </div>

        <div class="form-group">
            <label>Valor 2:</label>

            <input
                type="number"
                step="0.1"
                name="valor2"
                value="0"
                class="form-control"
                required>

            <small class="text-muted">
                Introduzca segundo valor
            </small>
        </div>

        <button type="reset" class="btn btn-default">
            Borrar
        </button>

        <button type="submit" formaction="funcionalidades/sumar.php" class="btn btn-primary">
            Suma
        </button>

        <button type="submit" formaction="funcionalidades/restar.php" class="btn btn-primary">
            Resta
        </button>

        <button type="submit" formaction="funcionalidades/dividir.php" class="btn btn-primary">
            División
        </button>

        <button type="submit" formaction="funcionalidades/multiplicar.php" class="btn btn-primary">
            Producto
        </button>

        <button type="submit" formaction="funcionalidades/potencia.php" class="btn btn-primary">
            Potencia
        </button>

    </form>

    <hr>

    <p>
        &copy; Pablo Bocanegra - DWES - 2º DAW - Curso 26/27
    </p>

</div>

</body>
</html>