<?php

/**
 * Función que nos devuelve la fecha de hoy en castellano utilizando es_ES.UTF-8
 */

/**
 * Guarda la fecha actual en un string
 *
 * @return string Fecha actual
 */
function fecha() {
    setlocale(LC_TIME, "es_ES.UTF-8");
    return "Hoy es " . strftime("%A %e de %B %Y");
}
