<?php

function divisao_exata($dividendo, $divisor)
{
    if ($dividendo % $divisor == 0) {
        return true;
    } else {
        return false;
    }
}

do {
    $numero = readline("informe um número: ");
    for ($div = $numero - 1; $div > 0; $div--) {
        $dividiu = $divisao_exata($numero, $div);

        if ($dividiu) {
            echo $div . ", ";
        }
    }
    echo "/n";
} while ($numero > 1);
