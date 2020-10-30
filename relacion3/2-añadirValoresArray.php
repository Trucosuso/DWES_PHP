<?php

/**
 * Programa que añada valores a un array mientras que su longitud sea menor que 120.
 * Después mostrará la información del array por pantalla
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

while (count($array) < 120) {
    $array[] = rand(0, 1000);
    //array_push($array, rand(0, 1000));
}

echo mostrarArray($array);
