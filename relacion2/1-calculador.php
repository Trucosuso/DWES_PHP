<?php

/**
 * Escribe la función calculador:
 * La función calculador recibe como argumentos dos números y  la operación que debe de aplicarles ( en realidad, la función que queremos aplicar).
 * Según que función se le pase como argumento, devolverá un valor u otro. Suma, resta, multiplicación, etc.
 */

function suma($numero1, $numero2) {
    return $numero1 + $numero2;
}

function resta($numero1, $numero2) {
    return $numero1 - $numero2;
}

function multiplicacion($numero1, $numero2) {
    return $numero1 * $numero2;
}

function division($numero1, $numero2) {
    if ($numero2 == 0) {
        return null;
    }
    return $numero1 / $numero2;
}

function calculadora($operador, $numero1, $numero2) {
    $texto = $operador($numero1, $numero2);
    return $texto;
}

echo calculadora('resta', 2, 4);
