<?php

define ('GRAVEDAD', 9.81); // Aceleración debida a la gravedad en m/s^2

$velocidad_inicial = (float) $_POST['velocidad_inicial'] ?? 0;
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'] ?? 0;

// Convertir ángulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento); // Convertir ángulo a radianes
 
// calcular la velocidad inicial vertical y horizontal
$velocidad_inicial_vertical = $velocidad_inicial * sin($angulo_radianes);
$velocidad_inicial_horizontal = $velocidad_inicial * cos($angulo_radianes);

//calcular el tiempo de vuelo del proyectil
$tiempo_vuelo = (2 * $velocidad_inicial_vertical) / GRAVEDAD;

//calcular la altura máxima del proyectil
$altura_maxima = ($velocidad_inicial_vertical ** 2) / (2 * GRAVEDAD);


include 'views/calculos.view.php';