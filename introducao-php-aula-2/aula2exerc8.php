<?php

$n1 = readline("Digite um número: ");
$n2 = readline("Digite outro um número: ");

if ($n1 < $n2) {
    for ($i = $n1; $i <= $n2; $i++) {
        if ($i % 5 == 0) {
            echo $i . "\n";
        }
    }
} else {
    for ($i = $n2; $i <= $n1; $i++) {
        if ($i % 5 == 0) {
            echo $i . "\n";
        }
    }
}
