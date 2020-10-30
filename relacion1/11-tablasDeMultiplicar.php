<?php

/**
 *  Imprimir por pantalla todas las tablas de multiplicar de 1 a 10 dentro de una tabla HTML
 */

echo '<table style="border: 1px solid black; border-collapse: collapse;">';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr style="border: 1px solid black;">';
    echo "<td style=\"border: 1px solid black; font-weight:bold;\">Tabla del $i</td>";
    for ($j = 0; $j <= 10; $j++) {
        echo "<td style=\"border: 1px solid black;\"> $i x $j = " . ($i * $j) . "</td>";
    }
    echo '</tr>';
}

echo '</table>';
