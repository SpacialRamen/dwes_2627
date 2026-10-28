<?php

/**
 * delete.php
 *
 * permite eliminar un artículo existente en la tabla de artículos
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
// Obtener el indice del artículo a eliminar desde la URL
// delete.php?indice=0 - elimino el primer artículo
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido
if ($indice === null || !is_numeric($indice)) {
    // Manejar el error de índice inválido
    die("Índice inválido");
}

// Cargar el array de artículos
$articulos = get_articulos();

// eliminamos el artículo del array de artículos
unset($articulos[$indice]);

// Cargo la vista de eliminación con los detalles del artículo a eliminar
require_once 'views/index.view.php';


