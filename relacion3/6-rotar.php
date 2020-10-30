<?php

/**
 * Escriba un script que cree un array con 15 números aleatorios y los muestre en pantalla. A continuación, rotará los elementos de ese array una posición.
 * Es decir, el elemento de la posición 0 debe pasar a la posición 1, el de al 1 a la 2, …, el elemento de la última posición pasará a la posición 0.
 * Por último, mostrará el nuevo contenido del array.
 */

// MIRAR SI ESTÁ HECHO EN EL SENTIDO CORRECTO

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

/**
 * Rota hacia la derecha el array
 *
 * @param  array $array Array a rotar. Se pasa por referencia
 * @return void
 */
function rotarArray(&$array) {
    array_unshift($array, end($array));
    unset($array[array_key_last($array)]);
}

$array = array();
for ($i = 0; $i < 15; $i++) {
    $array[] = rand(0, 100);
}

echo mostrarArray($array);
rotarArray($array);
echo mostrarArray($array);
