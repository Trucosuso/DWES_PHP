<?php

/**
 * Escribe un programa que permita realizar las operaciones básicas de una calculadora: suma, resta, multiplicación y división. (Deberemos recoger dos números por URL con GET)
 */

$numero1 = $_GET["numero1"]; // Obtenemos el número 1 de la URL
$numero2 = $_GET["numero2"]; // Obtenemos el número 2 de la URL

if (isset($numero1) && isset($numero2)) {
    echo 'Número 1: ' . $numero1 . '<br>';
    echo 'Número 2: ' . $numero2 . '<br>';

    print("Suma $numero1 + $numero2 = " . ($numero1 + $numero2) . "<br>");
    print("Resta $numero1 - $numero2 = " . ($numero1 - $numero2) . "<br>");
    print("Multiplicación $numero1 * $numero2 = " . ($numero1 * $numero2) . "<br>");
    print("División $numero1 / $numero2 = " . ($numero1 / $numero2) . "<br>");
} else {
    print("Introduzca numero1 y numero2.");
}
