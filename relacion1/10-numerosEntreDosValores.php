<?php

/**
 * Haz un script para mostrar todos los números comprendidos entre los dos valores que nos lleguen por la URL. Por ejemplo, si llegan el 5 y el 9 mostraremos los valores 6,7 y 8.
 * Deberemos asegurarnos de que hemos recibido los dos parámetros y que el primer número es menor que el segundo.
 */

$numero1 = $_GET["numero1"]; // Obtenemos el número 1 de la URL
$numero2 = $_GET["numero2"]; // Obtenemos el número 2 de la URL

if (isset($numero1) && isset($numero2)) {
    if ($numero1 > $numero2) {
        $aux = $numero2;
        $numero2 = $numero1;
        $numero1 = $aux;
    }

    for ($i = $numero1 + 1; $i < $numero2; $i++) {
        print("$i<br>");
    }
} else {
    print("Introduzca numero1 y numero2.");
}
