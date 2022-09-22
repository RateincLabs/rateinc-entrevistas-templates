<?php

/*
    Author: YOUR_NAME
    Email: YOUR_EMAIL
*/

/*
 * Completa la funcion 'simpleArraySum' de abajo.
 *
 * Se espera que la funcion retorne un INTEGER.
 * La funcion acepta un INTEGER_ARRAY ar como parametro.
 */


function simpleArraySum($ar) {
    // Escribe tu codigo aqui

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
