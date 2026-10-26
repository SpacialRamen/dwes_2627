<?php

function get_articulos() {
    $articulos = [
        [
            'id' => 1,
            'titulo' => 'El Gran Gatsby',
            'editorial' => 'Charles Scribner\'s Sons',
            'autor' => 'F. Scott Fitzgerald',
            'anio' => 1925
        ],
        [
            'id' => 2,
            'titulo' => 'Cien Años de Soledad',
            'editorial' => 'Editorial Sudamericana',
            'autor' => 'Gabriel García Márquez',
            'anio' => 1967
        ],
        [
            'id' => 3,
            'titulo' => '1984',
            'editorial' => 'Secker & Warburg',
            'autor' => 'George Orwell',
            'anio' => 1949
        ],
        [
            'id' => 4,
            'titulo' => 'Matar a un ruiseñor',
            'editorial' => 'J.B. Lippincott & Co.',
            'autor' => 'Harper Lee',
            'anio' => 1960
        ],
        [
            'id' => 5,
            'titulo' => 'El Señor de los Anillos',
            'editorial' => 'George Allen & Unwin',
            'autor' => 'J.R.R. Tolkien',
            'anio' => 1954
        ]
    ];

    return $articulos;
}