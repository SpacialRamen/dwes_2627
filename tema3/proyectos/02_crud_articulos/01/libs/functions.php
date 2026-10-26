<?php

function get_articulos() {
    $articulos = [
        [
            'id' => 1,
            'titulo' => 'RTX 4070 Super',
            'fabricante' => 'NVIDIA',
            'categoria' => 'Tarjeta Gráfica',
            'anio' => 2024
        ],
        [
            'id' => 2,
            'titulo' => 'Ryzen 7 7800X3D',
            'fabricante' => 'AMD',
            'categoria' => 'Procesador',
            'anio' => 2023
        ],
        [
            'id' => 3,
            'titulo' => 'Core i7-14700K',
            'fabricante' => 'Intel',
            'categoria' => 'Procesador',
            'anio' => 2023
        ],
        [
            'id' => 4,
            'titulo' => 'Samsung 990 Pro 2TB',
            'fabricante' => 'Samsung',
            'categoria' => 'SSD',
            'anio' => 2022
        ],
        [
            'id' => 5,
            'titulo' => 'Corsair Vengeance DDR5 32GB',
            'fabricante' => 'Corsair',
            'categoria' => 'Memoria RAM',
            'anio' => 2023
        ]
    ];

    return $articulos;
}
