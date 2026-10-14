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

        <!-- <h1 class="text-center mb-4">Movimiento Rectilíneo Uniformemente Acelerado</h1> -->

        <div class="card">
            <div class="card-body">

                <form action="calcular.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">
                            Velocidad inicial (m/s)
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            name="velocidadInicial"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Aceleración (m/s²)
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            name="aceleracion"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Tiempo (s)
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            name="tiempo"
                            class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Masa (kg)
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            name="masa"
                            class="form-control"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Calcular
                    </button>

                </form>

            </div>
        </div>

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