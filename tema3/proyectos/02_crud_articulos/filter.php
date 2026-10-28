<?php

/**
 * create.php
 *
 * permite crear un nuevo libro a partir de los datos enviados desde el formulario.
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
// Obtener el prompt de busqueda desde la URL
// filter.php?prompt=cervantes - filtro los libros que contienen "cervantes" en su título
$prompt = htmlspecialchars($_GET['prompt'] ?? null);

// Cargar el array de libros
$libros = get_libros();

// filtrar el array de libros a partir del prompt 
$aux = [];
foreach ($libros as $libro) {
    if (array_search($prompt, $libro) !== false) {
        $aux[] = $libro;
    }
}

$libros = $aux;

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/index.view.php';


