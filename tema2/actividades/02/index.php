<?php

echo "<h2>Ejercicio 1</h2>";

echo (10 * "5abc") . "<br>";
echo (10 + "5abc") . "<br>";
echo (10 + 5.5) . "<br>";
echo (10 . " años") . "<br>";
echo (10 + true) . "<br>";

echo "<h2>Ejercicio 2 - is_null()</h2>";

$valorNulo1 = null;
$valorNulo2 = null;
$valorNulo3 = null;

echo is_null($valorNulo1) ? "true<br>" : "false<br>";
echo is_null($valorNulo2) ? "true<br>" : "false<br>";
echo is_null($valorNulo3) ? "true<br>" : "false<br>";

echo is_null(0) ? "true<br>" : "false<br>";
echo is_null("") ? "true<br>" : "false<br>";
echo is_null(false) ? "true<br>" : "false<br>";

echo "<h2>Ejercicio 3 - isset()</h2>";

$nombre = "Pablete";
$edad = 20;
$estaActivo = false;

echo isset($nombre) ? "true<br>" : "false<br>";
echo isset($edad) ? "true<br>" : "false<br>";
echo isset($estaActivo) ? "true<br>" : "false<br>";

$valorNulo = null;

echo isset($valorNulo) ? "true<br>" : "false<br>";
echo isset($variableNoDefinida) ? "true<br>" : "false<br>";

unset($edad);
echo isset($edad) ? "true<br>" : "false<br>";

echo "<h2>Ejercicio 4 - empty()</h2>";

$textoVacio = "";
$numeroCero = 0;
$estadoFalso = false;

echo empty($textoVacio) ? "true<br>" : "false<br>";
echo empty($numeroCero) ? "true<br>" : "false<br>";
echo empty($estadoFalso) ? "true<br>" : "false<br>";

$saludo = "Hola";
$cantidad = 10;
$numeros = [1, 2, 3];

echo empty($saludo) ? "true<br>" : "false<br>";
echo empty($cantidad) ? "true<br>" : "false<br>";
echo empty($numeros) ? "true<br>" : "false<br>";

?>