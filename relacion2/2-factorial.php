<?php

/**
 * Escribe una función para calcular el factorial de un número que recibirá como argumento
 */

/**
 * Calcula el factorial de forma recursiva
 *
 * @param  positive-int $numero
 * @return positive-int
 */
function factorial($numero) {
    if ($numero == 0) {
        return 1;
    } else {
        return $numero * factorial($numero - 1);
    }
}

echo "El factorial de 9 es " . factorial(9);
