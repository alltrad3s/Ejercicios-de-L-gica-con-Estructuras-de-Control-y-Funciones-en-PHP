<?php

/* 2. Función que determina si un número es primo
 * Un número primo es aquel que solo es divisible por 1 y por sí mismo
 * @param int $numero Número a evaluar
 * @return bool true si es primo, false si no lo es
 */
function esPrimo($numero) {
    // Los números menores o iguales a 1 no son primos
    if ($numero <= 1) {
        return false;
    }
    
    // Comprobar divisibilidad desde 2 hasta la raíz cuadrada del número
    // Si encontramos un divisor, el número no es primo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    
    return true;
}
?>
