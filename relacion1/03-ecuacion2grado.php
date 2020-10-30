<?php

/**
 * Escribe un programa que resuelva una ecuación de segundo grado. Aprovecha para ilustrar la diferencia entre echo, print y printf
 */

// Variables
$a = 1;
$b = -5;
$c = 6;

$resultadoPositivo = -$b + sqrt($b ** 2 - 4 * $a * $c) / (2 * $a);
$resultadoNegativo = -$b - sqrt($b ** 2 - 4 * $a * $c) / (2 * $a);

// Echo admite un número ilimitado de strings
echo "Variable a: $a ", "Variable b: $b ", "Variable c: $c <br>";
// Print solo admite un string
print("El resultado positivo es: " . $resultadoPositivo . "<br>");
// Printf requiere el formato como primer argumento y el resto de argumentos rellenan las variables indicadas con %f o %d por ejemplo https://www.php.net/manual/es/function.sprintf.php para los formatos
printf("El resultado negativo es: %0.3f", $resultadoNegativo);
