<?php

$pares = 0;
$impares = 0;

for ($i = 1; $i <= 10; $i++) {
    $numeros = readline("Digite um número: ");
    if ($numeros % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo 'Quantidade de números pares: ' . $pares . "\nQuantidade de números ímpares: " . $impares;
