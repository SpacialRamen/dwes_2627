<?php

/**
 * show.php
 *
 * permite mostrar un artículo existente en la tabla de artículos
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
// Obtener el indice del artículo a mostrar desde la URL
// show.php?indice=0 - muestro el  primer artículo
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de artículos
$articulos = get_articulos();

// Obtenemos el artículo a mostrar
$articulo = $articulos[$indice];

// Cargo la vista de edición con los detalles del artículo a editar
require_once 'views/show.view.php';


