<?php

function primo($num)
{

    $divisores = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        return true;
    } else {
        return false;
    }
}

do {
    $num = readline("Insira um número: ");
    $resultado = primo($num);

    if ($resultado) {
        echo "Número primo!\n";
    } else {
        echo "Número não primo!\n";
    }
} while ($num > 1);
