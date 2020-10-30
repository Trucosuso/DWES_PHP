<?php

/**
 * Escriba un programa que guarde en un array 20 valores aleatorios entre 0 y 100.
 * En un segundo array llamado cuadrados deberá almacenar los cuadrados de los valores que hay en el primer array.
 * En un tercer array llamado cubo se deben almacenar los cubos de los valores que hay en el primer array.
 * Se deberá mostrar el contenido de los tres arrays dispuesto en tres columnas paralelas
 */

function cuadrado($numero) {
    return $numero * $numero;
}

function cubo($numero) {
    return pow($numero, 3);
}

$array = array();
for ($i = 0; $i < 20; $i++) {
    $array[] = rand(0, 100);
}

$cuadrados = array_map("cuadrado", $array);
$cubos = array_map("cubo", $array);

echo "<table><tr><th>Array</th><th>Cuadrados</th><th>Cubos</th></tr>";
for ($i = 0; $i < count($array); $i++) {
    echo "<tr><td>" . $array[$i] . "</td><td>" . $cuadrados[$i] . "</td><td>" . $cubos[$i] . "</td></tr>";
}
echo "</table>";
