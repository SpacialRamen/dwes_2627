<?php

/**
 * order.php
 *
 * permite ordenar los libros en la tabla
 *
 * @package    CRUD Libros
 * @author     Pablo Bocanegra Corrales
 * @version    1.0
 * 
 * Tabla  libros:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - titulo (VARCHAR(255))
    *  - autor (VARCHAR(255))
    *  - editorial (VARCHAR(255))
    *  - generos 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el criterio de ordenación siempre ascendente
// order.php?criterio=titulo - ordeno por título
$criterio = htmlspecialchars($_GET['criterio'] ?? 'id');

// Validar el índice recibido

// Cargar el array de libros
$libros = get_libros();

// ordenar el array de libros por el criterio recibido
$array_criterio = array_column($libros, $criterio);
array_multisort($array_criterio, SORT_ASC, $libros);
// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';


    