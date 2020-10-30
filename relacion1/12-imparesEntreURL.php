<?php

/**
 * Modificación del ejercicio  7  para mostrar todos los números impares entre dos números que nos lleguen  por la URL usando parámetros con GET
 */

$numero1 = $_GET["numero1"]; // Obtenemos el número1 de la URL
$numero2 = $_GET["numero2"]; // Obtenemos el número2 de la URL

if (isset($numero1) && isset($numero2)) {
    if ($numero1 > $numero2) {
        $aux = $numero2;
        $numero2 = $numero1;
        $numero1 = $aux;
    }

    for ($i = $numero1; $i <= $numero2; $i++) {
        if ($i % 2 != 0) {
            print($i . '<br>');
        }
    }
} else {
    print("Introduzca numero1 y numero2.");
}
