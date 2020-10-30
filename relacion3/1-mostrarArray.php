<?php

/**
 * Escribe un script que almacene un array de 8 números enteros:
 *  a. recorrerá el array y lo mostrará
 *  b. lo ordenará y lo mostrará
 *  c. mostrará su longitud
 *  d. buscará un elemento dentro del array
 *  e. buscará un elemento dentro del array, pero por el parámetro que llegue a la URL.
 *  Para mostrar los elementos del array en cada uno de los apartados se creará una función llamada mostrarArray().
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

// Crear array
echo 'a) <br>';
$array = array(3, 6, 2, 7, 8, 23, 67, 43);
echo mostrarArray($array);

// Ordenar array
echo 'b) <br>';
sort($array);
echo mostrarArray($array);

// Longitud array
echo 'c) <br>';
echo "El array tiene " . count($array) . " elementos.<br>";

// Busca elemento dentro del array
echo 'd) <br>';
echo "El elemento 7 está en la posición " . array_search(7, $array) . "<br>";

// Busca elemento dentro del array por parámentro que llega de URL
echo 'e) <br>';
$elemento = $_GET["buscar"];
if (isset($elemento)) {
    $posicion = array_search($elemento, $array);
    if (!empty($posicion)) {
        echo "El elemento $elemento está en la posición $posicion<br>";
    } else {
        echo "El elemento $elemento no está dentro del array<br>";
    }
} else {
    echo "Introduzca el parámetro \"buscar\" por la URL";
}
