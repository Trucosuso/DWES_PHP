<?php

/**
 * Escribe una función para comprobar si un número es primo y un programa para probarla
 */


/**
 * Comprueba si un número es primo
 *
 * @param  int $numero Número a comprobar
 * @return bool
 */
function esPrimo($numero) {
    if ($numero == 2) {
        return true;
    } elseif ($numero % 2 == 0) {
        return false;
    } else {
        $i = 3;
        $raizN = sqrt($numero);
        while ($i <= $raizN) {
            if ($numero % $i == 0) {
                return false;
            } else {
                $i += 2;
            }
        }
    }
    return true;
}

$numero = 152647111;
if (esPrimo($numero)) {
    echo "El número $numero es primo";
} else {
    echo "El número $numero no es primo";
}
