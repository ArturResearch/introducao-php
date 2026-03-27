<?php

$valor_arrecadado = 0;

do {
    $valor = (int)readline("Valor da vaquinha: ");
    $valor_arrecadado += $valor;
} while ($valor > 0);

printf("O valor total é " . $valor_arrecadado) . "\n";
