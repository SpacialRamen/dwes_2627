<?php

class TablaModel
{
    public function generarTabla()
    {
        $tabla = [];

        for ($fila = 1; $fila <= 10; $fila++) {
            for ($columna = 1; $columna <= 10; $columna++) {
                $tabla[$fila][$columna] = $fila * $columna;
            }
        }

        return $tabla;
    }
}