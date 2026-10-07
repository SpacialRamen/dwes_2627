<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.1 - Calculadora Básica</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-calculator-fill"></i>
            <span class="fs-6">Proyecto 2.2 - Proyectiles</span>
        </header>

        <!-- contenido principal de la aplicación -->
        <main>
            <div class="container">
                
                <div class="bg-light p-3 mb-3">
                    <h1 class="display-4">Lanzamiento Proyectiles</h1>
                    <p class="mb-1">Proyecto 2.2 - DWES</p>
                </div>
                
                <table class="table table-sm">
                    <tbody>
                        
                        <tr class="table-light">
                            <th colspan="2">Valores Iniciales</th>
                        </tr>
                        
                        <tr>
                            <td>Velocidad Inicial</td>
                            <td><?= number_format($velocidad_inicial, 2, ',', '.') ?> m/s</td>
                        </tr>
                        
                        <tr>
                            <td>Ángulo Inclinación</td>
                            <td><?= number_format($angulo_lanzamiento, 2, ',', '.') ?>°</td>
                        </tr>
                        
                        <tr class="table-light">
                            <th colspan="2">Resultados</th>
                        </tr>
                    
                        <tr>
                            <td>Ángulo en Radianes</td>
                            <td><?= number_format($angulo_radianes, 5, ',', '.') ?></td>
                        </tr>
                    
                        <tr>
                            <td>Velocidad Inicial X</td>
                            <td><?= number_format($velocidad_inicial_horizontal, 2, ',', '.') ?> m/s</td>
                        </tr>
                    
                        <tr>
                            <td>Velocidad Inicial Y</td>
                            <td><?= number_format($velocidad_inicial_vertical, 2, ',', '.') ?> m/s</td>
                        </tr>
                    
                        <tr>
                            <td>Tiempo de Vuelo</td>
                            <td><?= number_format($tiempo_vuelo, 2, ',', '.') ?> s</td>
                        </tr>
                    
                        <tr>
                            <td>Altura Máxima</td>
                            <td><?= number_format($altura_maxima, 2, ',', '.') ?> m</td>
                        </tr>
                
                    </tbody>
                </table>
            
            </div>

        </main>

        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Pablo Bocanegra Corrales - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </div>
</body>

</html>