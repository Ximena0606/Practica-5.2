<?php
// Generar arreglo con 15 números aleatorios entre 0 y 10
$numeros = array();
for ($i = 0; $i < 15; $i++) {
    $numeros[$i] = rand(0, 10);
}

// Suma total
function suma_total(array $numeros): int {
    $suma = 0;
    foreach ($numeros as $n) {
        $suma += $n;
    }
    return $suma;
}

// Suma en índices pares
function suma_pares(array $numeros): int {
    $suma = 0;
    for ($i = 0; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}

// Suma en índices impares
function suma_impares(array $numeros): int {
    $suma = 0;
    for ($i = 1; $i < count($numeros); $i += 2) {
        $suma += $numeros[$i];
    }
    return $suma;
}

// Mostrar resultados
echo "<h3>Arreglo:</h3>[" . implode(", ", $numeros) . "]<br>";
echo "<h3>Suma total:</h3>" . suma_total($numeros) . "<br>";
echo "<h3>Suma en índices pares:</h3>" . suma_pares($numeros) . "<br>";
echo "<h3>Suma en índices impares:</h3>" . suma_impares($numeros) . "<br>";
?>
