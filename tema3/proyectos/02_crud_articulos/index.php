<?php

/**
 * create.php
 *
 * permite crear un nuevo artículo a partir de los datos enviados desde el formulario.
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
$articulos = get_articulos();

// Views
include 'views/index.view.php';