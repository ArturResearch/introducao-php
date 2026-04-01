<?php

function fatorial($n1)
{
    if ($n1 > 1) {

        $n2 = 1;
        for ($i = $n1 + 1; $i > 1; $i--) {
            $n2 = $n2 * $n1--;
        }
        return $n2 . "\n";
    } else if ($n1 = 1) {
        echo "1" . "\n";
    } else if ($n1 = 0) {
        die;
    }
}
do {
    $n1 = readline("Informe um número: ");

    if ($n1 != 0) {
        $fatorial = fatorial($n1);
        echo "O fatorial do número é: " . $fatorial . "\n";
    }
} while ($n1 != 0);
