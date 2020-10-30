<?php

/**
 * Escribe una función que calcule el máximo común divisor de dos números y un programa para probarla. 
 */

/**
 * maximoComunDivisor
 *
 * @param  int $numero1 Numero 1
 * @param  int $numero2 Numero 2
 * @return int
 */
function maximoComunDivisor($numero1, $numero2) {
    if ($numero2 == 0) {
        return $numero1;
    }
    return maximoComunDivisor($numero2, $numero1 % $numero2);
}

echo maximoComunDivisor(6, 6);
