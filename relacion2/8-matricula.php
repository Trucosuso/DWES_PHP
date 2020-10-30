<?php

/**
 * Escribe una función que reciba una cadena y comprueba si es una matrícula válida. Tiene que tener siete caracteres, los cuatro primeros números y el resto consonantes mayúsculas. 
 */

function matriculaValida($matricula) {
    // Comprobar que la longitud es 7
    if (strlen($matricula) != 7) {
        return FALSE;
    }

    /* Coger los números */
    $num = substr($matricula, 0, 4);
    $todonumeros = ctype_digit($num);
    if (!$todonumeros) {
        return FALSE;
    }

    /* Coger las letras */
    $letras = substr($matricula, 4, 3);
    $mayus = ctype_upper($letras);
    if (!$mayus) {
        return FALSE;
    }
    /* Comprobar que no aparezcan vocales */
    $vocales = strpbrk($letras, "AEIOU");
    if ($vocales === FALSE) {
        return TRUE;
    } else {
        return FALSE;
    }
}

$cad = "1337SDF";
if (matriculaValida($cad)) {
    echo "La cadena $cad es válida como matrícula<br>";
} else {
    echo "La cadena $cad no es válida como matrícula<br>";
}

$cad = "6548DEF";
if (matriculaValida($cad)) {
    echo "La cadena $cad es válida como matrícula<br>";
} else {
    echo "La cadena $cad no es válida como matrícula<br>";
}
