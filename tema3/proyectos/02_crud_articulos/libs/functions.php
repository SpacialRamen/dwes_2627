<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
        - get_articulos(): Devuelve un array con todos los artículos creados.
        - obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo creado.
*/

// Función get_articulos(): Devuelve un array con todos los artículos creados.
function get_articulos() {
    // Array de artículos (simulando una base de datos)
    $articulos = [
        [
            'id' => 1,
            'descripcion' => 'Pantalla LED 24 pulgadas',
            'modelo' => 'Modelo A',
            'categorias' => ['Electrónica', 'Pantallas'],
            'unidades' => 10,
            'precio' => 199.99
        ],
        [
            'id' => 2,
            'descripcion' => 'Teclado mecánico RGB',
            'modelo' => 'Modelo B',
            'categorias' => ['Electrónica', 'Periféricos'],
            'unidades' => 5,
            'precio' => 24.99
        ],
        [
            'id' => 3,
            'descripcion' => 'Ratón óptico USB',
            'modelo' => 'Modelo C',
            'categorias' => ['Electrónica', 'Periféricos'],
            'unidades' => 20,
            'precio' => 15.99
        ],
        [
            'id' => 4,
            'descripcion' => 'Altavoces Bluetooth portátiles',
            'modelo' => 'Modelo A',
            'categorias' => ['Electrónica', 'Periféricos'],
            'unidades' => 1,
            'precio' => 80.99
        ],
        [
            'id' => 5,
            'descripcion' => 'Torre de escritorio',
            'modelo' => 'Modelo A',
            'categorias' => ['Electrónica', 'Torres'],
            'unidades' => 75,
            'precio' => 159.99
        ]
    ];

    return $articulos;
}


// Función obtener_id_nuevo_articulo($articulos): Devuelve el id del nuevo artículo creado.

function obtener_id_nuevo_articulo($articulos = []) {
    // Obtener el último artículo del array
    $ultimo_articulo = end($articulos);

    // Obtener el id del último artículo
    $ultimo_id = $ultimo_articulo['id'];

    // Devolver el id del nuevo artículo (último id + 1)
    return $ultimo_id + 1;
}