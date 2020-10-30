<?php

/**
 * Escribe una  función para calcular potencias.
 * La función recibe como argumentos la base y el exponente (que es opcional y tiene por defecto el valor 2)
 */

/**
 * Calcula la potencia
 *
 * @param int|float|double $base Base
 * @param positive-int $exponente Exponente. 2 por defecto
 * @return int|float|double
 */
function potencia($base, $exponente = 2) {
    $potencia = $base;
    for ($i = 1; $i < $exponente; $i++) {
        $potencia *= $base;
    }
    return $potencia;
}

echo "9 elevado a 5 es: " . potencia(9, 5) . "<br>";

echo "7 elevado a 2 es: " . potencia(7) . "<br>";

echo "3 elevado a 1 es: " . potencia(3, 1) . "<br>";
