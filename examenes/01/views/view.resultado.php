<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Practico 03</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <i class="bi bi-speedometer2"></i>
</head>

<body>

    <div class="container mt-5">

        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Examen práctico 03 - Movimiento rectilíneo uniformemente acelerado</span>
        </header>

        <h2>Resultado</h2>

        <table class="table">

            <tbody>


                <tr>
                    <td><b>Datos Introducidos:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Velocidad inicial</td>
                    <td align="right"><?= number_format($velocidadInicial, 2, ',', '.') ?> m/s</td>
                </tr>

                <tr>
                    <td>Aceleración</td>
                    <td align="right"><?= number_format($aceleracion, 2, ',', '.') ?> m/s²</td>
                </tr>

                <tr>
                    <td>Tiempo</td>
                    <td align="right"><?= number_format($tiempo, 2, ',', '.') ?> s</td>
                </tr>

                <tr>
                    <td>Masa</td>
                    <td align="right"><?= number_format($masa, 2, ',', '.') ?> kg</td>
                </tr>

                <tr>
                    <td><b>Resultados:</b></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Velocidad final</td>
                    <td align="right"><?= number_format($velocidadFinal, 2, ',', '.') ?> m/s</td>
                </tr>

                <tr>
                    <td>Espacio recorrido</td>
                    <td align="right"><?= number_format($espacioRecorrido, 2, ',', '.') ?> m</td>
                </tr>

                <tr>
                    <td>Fuerza neta</td>
                    <td align="right"><?= number_format($fuerzaNeta, 2, ',', '.') ?> N</td>
                </tr>

                <tr>
                    <td>Energía cinética final</td>
                    <td align="right"><?= number_format($energiaCinetica, 2, ',', '.') ?> J</td>
                </tr>

            </tbody>

        </table>
        <button type="reset" class="btn btn-primary">
            Volver
        </button>

    </div>
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
        <div class="container">
            <span class="text-muted">&copy; 2026
                Pablo Bocanegra Corrales - DWES - 2º DAW - Curso 26/27
            </span>
        </div>
    </footer>

    <!-- js bootstrap básico 5.3.8 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>