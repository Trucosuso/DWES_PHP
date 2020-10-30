<?php

/**
 * Modifica el ejercicio cálculo de un factorial para que controle si el argumento es negativo utilizando una excepción.
 *  Usa: InvalidArgumentException
 */

/**
 * Calcula el factorial de forma recursiva
 *
 * @param  positive-int $numero
 * @return positive-int
 */
function factorial($numero) {
    if ($numero < 0) {
        throw new InvalidArgumentException("El número introducido es negativo", 1);
    } elseif ($numero == 0) {
        return 1;
    } else {
        return $numero * factorial($numero - 1);
    }
}

try {
    echo "El factorial de 9 es " . factorial(-9);
} catch (InvalidArgumentException $exception) {
    echo "Error: {$exception->getMessage()}";
}

