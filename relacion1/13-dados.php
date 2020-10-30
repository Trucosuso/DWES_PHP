<?php

/**
 * Escriba un script muestre la tirada de dos dados al azar (usar rand) y diga:
 *  - si ha salido una pareja de valores iguales
 *  - o el mayor de los valores que se han obtenido en la tirada
 */

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

if ($dado1 == $dado2) {
    print("Ha salido el número $dado1 en los dos dados");
} else if ($dado1 > $dado2) {
    print("El dado 1 ha sacado el número más grande: $dado1");
} else {
    print("El dado 2 ha sacado el número más grande: $dado2");
}
