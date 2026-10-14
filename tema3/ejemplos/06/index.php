<?php
//estructura switch
$nota = 8;

switch ($nota) {
    case ($nota >= 9):
        echo "Sobresaliente";
        break;
    case ($nota >= 7):
        echo "Notable";
        break;
    case ($nota >= 5):
        echo "Aprobado";
        break;
    default:
        echo "Suspenso";
        break;
}
