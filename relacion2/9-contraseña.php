<?php

/**
 * Escribe una función que reciba una cadena y comprueba si es una contraseña válida. Hay que comprobar que tenga: 
 *  – Entre 6 y 15 caracteres.
 *  – Al menos un número. 
 *  – Al menos una letra mayúscula. 
 *  – Al menos una letra minúscula. 
 *  – Al menos un carácter no alfanumérico
 */

/**
 * Comprueba que la contraseña es válida. Tiene que tener entre 6 y 15 caracteres, un número, una letra mayúscula, una letra minúscula y un carácter no alfanumérico. 
 *
 * @param  string $contraseña Contraseña a comprobar
 * @return boolean true si cumple los criterios, false si no
 */
function contraseñaValida($contraseña) {
    // Comprobar que la longitud está entre 6 y 15
    if (strlen($contraseña) < 6 || strlen($contraseña) > 15) {
        return false;
    }

    // Comprobar que hay al menos un número
    if (!preg_match("/\d/", $contraseña)) {
        return false;
    }

    // Comprobar que hay al menos una letra mayúscula
    if (!preg_match("/[A-Z]/", $contraseña)) {
        return false;
    }

    // Comprobar que hay al menos una letra minúscula
    if (!preg_match("/[a-z]/", $contraseña)) {
        return false;
    }

    // Comprobar que hay al menos un carácter no alfanumérico
    if (!preg_match("/[^a-zA-Z\d\sñáéíóú:]/", $contraseña)) {
        return false;
    }

    return true;
}


$resultado = contraseñaValida("Conse&ñaPrueb4");
if ($resultado) {
    echo "La contraseña es válida";
} else {
    echo "La contraseña no es válida";
}
