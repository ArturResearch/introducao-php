<?php

$n = readline('escreva um número: ');

if ($n > 0) {
    for ($i = $n; $i > 1; $i--) {
        echo $i . "\n";
    }
} else if ($n < 0) {
    for ($i = $n; $i < 1; $i++) {
        echo $i . "\n";
    }
}
