<?php

$n1 = readline("escreva um número: ");
$n2 = readline("escreva outro número: ");
$n3 = readline("escreva outro número: ");

if ($n1 < $n2 && $n1 < $n3) {
    echo $n1 . "\n";
} else if ($n2 < $n1 && $n2 < $n3) {
    echo $n2 . "\n";
} else if ($n3 < $n2 && $n3 < $n1) {
    echo $n3 . "\n";
}
