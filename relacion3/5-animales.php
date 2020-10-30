<?php

/**
 * Muestre un grupo de entre 20 y 30 animales al azar con Unicode.
 * A continuación, mostrará un animal al azar de los que están incluidos en el grupo anterior y lo eliminará del array.
 * Por último, mostrará de nuevo el grupo inicial, pero habiendo eliminado del grupo los animales que coincidan con el animal suelto (al menos habrá uno). También mostrará un mensaje con el número total de animales que quedan.  En el ejemplo anterior quedarían 21 animales. 
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

// Rellenamos el array con animales aleatorios y lo mostramos
$animales = array();
for ($i = 0; $i < rand(20, 30); $i++) {
    $animales[] = '&#' . rand(128000, 128060);
}
echo count($animales) . ' animales<br>';
echo mostrarArray($animales);

// Eliminamos un animal aleatorio de todas las posiciones en las que aparece
$animalAleatorio = $animales[array_rand($animales)];
echo 'Animal a eliminar: ' . $animalAleatorio . '<br>';
foreach ($animales as $posicion => $animal) {
    if ($animalAleatorio == $animal) {
        unset($animales[$posicion]);
    }
}
echo count($animales) . ' animales<br>';
echo mostrarArray($animales);
