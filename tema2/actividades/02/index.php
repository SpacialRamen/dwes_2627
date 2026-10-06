<?php

echo "<h1>Actividad 2.2 - Estado de una variable</h1>";

/* ==========================================
   EJERCICIO 1. Conversiones de datos
========================================== */

echo "<h2>Ejercicio 1. Conversiones de datos en expresiones</h2>";

$entero = 10;

// 1. Multiplicar entero con cadena que contiene un número inicial
$resultado1 = $entero * "5 coches";
echo "<p><strong>1. Entero * cadena con número inicial:</strong> ";
echo "$entero * '5 coches' = $resultado1";
echo " | Tipo: " . gettype($resultado1) . "</p>";

// 2. Sumar entero con cadena con número inicial
$resultado2 = $entero + "20 personas";
echo "<p><strong>2. Entero + cadena con número inicial:</strong> ";
echo "$entero + '20 personas' = $resultado2";
echo " | Tipo: " . gettype($resultado2) . "</p>";

// 3. Sumar entero con float
$resultado3 = $entero + 5.5;
echo "<p><strong>3. Entero + float:</strong> ";
echo "$entero + 5.5 = $resultado3";
echo " | Tipo: " . gettype($resultado3) . "</p>";

// 4. Concatenar entero con cadena
$resultado4 = $entero . " años";
echo "<p><strong>4. Concatenar entero con cadena:</strong> ";
echo "$entero . ' años' = $resultado4";
echo " | Tipo: " . gettype($resultado4) . "</p>";

// 5. Sumar entero con booleano
$resultado5 = $entero + true;
echo "<p><strong>5. Entero + booleano:</strong> ";
echo "$entero + true = $resultado5";
echo " | Tipo: " . gettype($resultado5) . "</p>";



/* ==========================================
   EJERCICIO 2. is_null()
========================================== */

echo "<h2>Ejercicio 2. is_null()</h2>";

// Verdaderos
$a = null;
$b = NULL;
$c = null;

echo "<h3>Resultados TRUE</h3>";
echo "is_null(\$a): " . (is_null($a) ? "TRUE" : "FALSE") . "<br>";
echo "is_null(\$b): " . (is_null($b) ? "TRUE" : "FALSE") . "<br>";
echo "is_null(\$c): " . (is_null($c) ? "TRUE" : "FALSE") . "<br>";

// Falsos
$d = 0;
$e = "";
$f = false;

echo "<h3>Resultados FALSE</h3>";
echo "is_null(\$d): " . (is_null($d) ? "TRUE" : "FALSE") . "<br>";
echo "is_null(\$e): " . (is_null($e) ? "TRUE" : "FALSE") . "<br>";
echo "is_null(\$f): " . (is_null($f) ? "TRUE" : "FALSE") . "<br>";



/* ==========================================
   EJERCICIO 3. isset()
========================================== */

echo "<h2>Ejercicio 3. isset()</h2>";

// Verdaderos
$nombre = "Juan";
$edad = 25;
$activo = false;

echo "<h3>Resultados TRUE</h3>";
echo "isset(\$nombre): " . (isset($nombre) ? "TRUE" : "FALSE") . "<br>";
echo "isset(\$edad): " . (isset($edad) ? "TRUE" : "FALSE") . "<br>";
echo "isset(\$activo): " . (isset($activo) ? "TRUE" : "FALSE") . "<br>";

// Falsos
$valorNull = null;

echo "<h3>Resultados FALSE</h3>";
echo "isset(\$valorNull): " . (isset($valorNull) ? "TRUE" : "FALSE") . "<br>";
echo "isset(\$variableNoExiste): " . (isset($variableNoExiste) ? "TRUE" : "FALSE") . "<br>";

unset($edad);
echo "isset(\$edad despues de unset): " . (isset($edad) ? "TRUE" : "FALSE") . "<br>";



/* ==========================================
   EJERCICIO 4. empty()
========================================== */

echo "<h2>Ejercicio 4. empty()</h2>";

// Verdaderos
$v1 = "";
$v2 = 0;
$v3 = false;

echo "<h3>Resultados TRUE</h3>";
echo "empty(\$v1): " . (empty($v1) ? "TRUE" : "FALSE") . "<br>";
echo "empty(\$v2): " . (empty($v2) ? "TRUE" : "FALSE") . "<br>";
echo "empty(\$v3): " . (empty($v3) ? "TRUE" : "FALSE") . "<br>";

// Falsos
$v4 = "Hola";
$v5 = 25;
$v6 = array(1, 2, 3);

echo "<h3>Resultados FALSE</h3>";
echo "empty(\$v4): " . (empty($v4) ? "TRUE" : "FALSE") . "<br>";
echo "empty(\$v5): " . (empty($v5) ? "TRUE" : "FALSE") . "<br>";
echo "empty(\$v6): " . (empty($v6) ? "TRUE" : "FALSE") . "<br>";

?>