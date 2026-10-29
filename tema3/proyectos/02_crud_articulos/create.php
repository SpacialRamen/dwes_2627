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

// Extraer los datos del formulario
$id = htmlspecialchars($_POST['id'] ?? '');
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categorias = htmlspecialchars($_POST['categorias'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? '');

// Proceso de validación de los datos del formulario

// Obtener el array de artículos existente
$articulos = get_articulos();

// Obtener id del nuevo artículo creado
$new_articulo_id = obtener_id_nuevo_articulo($articulos);

// Crear array asociativo del nuevo artículo
$new_articulo = [
    'id' => $new_articulo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categorias' => explode(', ', $categorias),
    'unidades' => $unidades,
    'precio' => $precio
];

// Agregar el nuevo artículo al array de artículos
$articulos[] = $new_articulo;



// Views
include 'views/new.view.php';

