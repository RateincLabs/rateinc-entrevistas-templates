<?php
/*
    Author: YOUR_NAME
    Email: YOUR_EMAIL
*/

/*
 * Completa la funcion 'balancedSums' de abajo.
 *
 * Se espera que la funcion retorne un string.
 * La funcion acepta un INTEGER_ARRAY arr como parametro.
 */

function balancedSums($arr) {
    // Escribe tu codigo aqui

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$T = intval(trim(fgets(STDIN)));

for ($T_itr = 0; $T_itr < $T; $T_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $arr_temp = rtrim(fgets(STDIN));

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = balancedSums($arr);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
