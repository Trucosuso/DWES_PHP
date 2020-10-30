<?php

/**
 * Escribe un script que rellene un array con valores aleatorios (0,1) y lo muestre.
 * A continuación, calcularemos su complementario y también la mostraremos. 
 */

/**
 * Devuelve una cadena con el array separado por espacios
 *
 * @param  array $array
 * @return string
 */
function mostrarArray($array) {
    $cadena = "";
    foreach ($array as $value) {
        $cadena .= $value . " ";
    }
    $cadena .= "<br>";
    return $cadena;
}

$array = array();
for ($i = 0; $i < 10; $i++) {
    $array[] = rand(0, 1);
}
echo mostrarArray($array);

$arrayComplementario = array_map(function ($x) {
    if ($x == 1) {
        return 0;
    }
    return 1;
}, $array);

echo mostrarArray($arrayComplementario);
