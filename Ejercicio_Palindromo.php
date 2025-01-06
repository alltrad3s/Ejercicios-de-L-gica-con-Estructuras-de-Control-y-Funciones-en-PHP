<?php
/**
 * 3. Función que determina si una cadena es un palíndromo
 * Un palíndromo se lee igual de izquierda a derecha que de derecha a izquierda
 * @param string $texto Texto a evaluar
 * @return bool true si es palíndromo, false si no lo es
 */
function esPalindromo($texto) {
    // Convertir a minúsculas y eliminar espacios y caracteres especiales
    $texto = strtolower($texto);
    $texto = preg_replace('/[^a-z0-9]/', '', $texto);
    
    // Comparar la cadena con su reverso
    return $texto === strrev($texto);
}

// Ejemplos de uso
echo "\n3. Verificación de palíndromos:\n";
$texto = "Anita lava la tina";
echo "\"$texto\" " . (esPalindromo($texto) ? "es" : "no es") . " un palíndromo\n";

?>
