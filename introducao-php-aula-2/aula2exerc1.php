<?php

$n = [];

for ($i = 1; $i <= 10; $i++) {
    $input = readline("digite o número $i: ");
    $n = (int)$input;

    if ($n < 0) {
        echo "negativo\n";
    } else if ($n > 0) {
        echo "positivo\n";
    } else if ($n = 0) {
        echo "não é positivo e nem negativo/n";
    } else {
        echo "resposta inválida\n";
    }
}
