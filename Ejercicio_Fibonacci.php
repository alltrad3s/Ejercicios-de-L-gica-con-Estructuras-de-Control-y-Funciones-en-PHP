<?php
/**
 * 1. Función que genera los primeros n términos de la serie Fibonacci
 * La serie comienza con 0 y 1, donde cada término siguiente es la suma de los dos anteriores
 * @param int $n Número de términos a generar
 * @return array Array con la serie Fibonacci
 */
function generarFibonacci($n) {
    // Validar que n sea un número positivo
    if ($n <= 0) {
        return [];
    }
    
    // Inicializar el array con los dos primeros términos
    $fibonacci = [0];
    if ($n == 1) {
        return $fibonacci;
    }
    
    $fibonacci[] = 1;
    
    // Generar los términos subsiguientes
    for ($i = 2; $i < $n; $i++) {
        // Cada nuevo término es la suma de los dos anteriores
        $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2];
    }
    
    return $fibonacci;
}

// Ejemplos de uso
echo "1. Serie Fibonacci (primeros 8 términos):\n";
print_r(generarFibonacci(8));

?>
