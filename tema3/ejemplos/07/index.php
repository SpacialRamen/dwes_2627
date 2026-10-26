<?php

//tipos de arrays: escalares o indexados

//array escalar o indexado

// $colores = array("rojo", "verde", "azul", "amarillo");
$colores = ["rojo", "verde", "azul", "amarillo"];

//acceder a un elemento
echo $colores[0]; //rojo
echo $colores[1]; //verde

//recorrer un array con un bucle for
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i] . "<br>";
}

//recorrer un array con un bucle foreach
foreach ($colores as $color) {
    echo $color . "<br>";
}

//modificar elermentos de un array
$colores[2] = "violeta"; //cambia azul por violeta