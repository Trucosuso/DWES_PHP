<?php

/**
 * Programa que compruebe que si una variable esta vacía
 *  - En caso de que lo esté se rellenará con una frase en minúscula y a continuación se mostrará por pantalla en mayúscula
 *  - Si no lo está se saca el contenido de la variable
 */

/**
 * Comprueba si una variable está vacía y si lo está la rellena con un string que devuelve en mayúsculas
 *
 * @param  mixed $var
 * @return string
 */
function comprobarVariable(&$var) {
    if (isset($var)) {
        return strval($var);
    } else {
        $var = "la variable no está rellena";
        return mb_strtoupper($var);
    }
}

$variable1 = 30;
echo comprobarVariable($variable1) . "<br>";

$variable2;
echo comprobarVariable($variable2) . "<br>";
echo $variable2;
