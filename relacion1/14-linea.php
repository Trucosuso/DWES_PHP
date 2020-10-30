<?php

/**
 * Escriba un script que cada vez que se ejecute muestre un línea de longitud entre 10 y 1000 píxeles (Deberemos recoger la longitud  por URL con GET)
 */

$longitud = $_GET["longitud"]; // Obtenemos la longitud de la línea

// Hacemos que la longitud esté entre 10 y 1000
if ($longitud < 10) {
    $longitud = 10;
} else if ($longitud > 1000) {
    $longitud = 1000;
}
print("<h3>Longitud: $longitud</h3>");
print("<svg height=\"10\" width=\"$longitud\">");
print("<rect height=\"10\" width=\"$longitud\" style=\"fill:rgb(0,0,0)\" />");
print("</svg>");
