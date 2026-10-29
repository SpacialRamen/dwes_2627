<?php

/**
 * order.php
 *
 * permite ordenar los artículos en la tabla
 *
 * @package    CRUD Artículos
 * @author     Pablo Bocanegra Corrales
 * @version    1.0
 * 
 * Tabla  artículos:
    *  - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    *  - descripcion (VARCHAR(255))
    *  - modelo (VARCHAR(255))
    *  - categorias (VARCHAR(255))
    *  - unidades 
    *  - precio 

*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
// Obtener el criterio de ordenación siempre ascendente
// order.php?criterio=descripcion - ordeno por descripción
$criterio = htmlspecialchars($_GET['criterio'] ?? 'id');

// Validar el índice recibido

// Cargar el array de artículos
$articulos = get_articulos();

// ordenar el array de artículos por el criterio recibido
$array_criterio = array_column($articulos, $criterio);
array_multisort($array_criterio, SORT_ASC, $articulos);
// Cargo la vista de edición con los detalles del artículo a editar
require_once 'views/index.view.php';


    