<?php

/**
 * Realiza un conversor de euros a dólares
 */

$euros = 50;
$dolares = $euros * 1.17150;

print($euros . ' € son ' . $dolares . ' $.<br>');

$dolares = 20;
$euros = $dolares * 0.853607;

print($dolares . ' $ son ' . $euros . ' €.');
