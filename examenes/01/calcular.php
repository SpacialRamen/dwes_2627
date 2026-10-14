<?php

$velocidadInicial = (float) str_replace(',', '.', $_POST['velocidadInicial']);
$aceleracion = (float) str_replace(',', '.', $_POST['aceleracion']);
$tiempo = (float) str_replace(',', '.', $_POST['tiempo']);
$masa = (float) str_replace(',', '.', $_POST['masa']);

$velocidadFinal = $velocidadInicial + $aceleracion * $tiempo;
$espacioRecorrido = $velocidadInicial * $tiempo + 0.5 * $aceleracion * $tiempo * $tiempo;
$fuerzaNeta = $masa * $aceleracion;
$energiaCinetica = 0.5 * $masa * $velocidadFinal * $velocidadFinal;


include 'views/view.resultado.php';