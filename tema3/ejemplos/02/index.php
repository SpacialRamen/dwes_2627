<?php
/*ejemplo 2. if, else, elseif y operador ternario, descripcion, determinar el item de calificaicion de un examen

la calificacion será:
    -suspenso
    -suficiente
    -bien
    -notable
    -sobresaliente

*/
$nota = 7;

//calcula item de calificacion
if ($nota < 5) {
    echo "suspenso";
} elseif ($nota < 6) {
    echo "suficiente";
} elseif ($nota < 7) {
    echo "bien";
} elseif ($nota < 9) {
    echo "notable";
} else {
    echo "sobresaliente";
}