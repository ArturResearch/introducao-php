<?php

$n1 = readline("Digite um número: ");
$n2 = readline("Digite outro número: ");
$n3 = 0;

for ($i = 1; $i <= $n2; $i++) {
    $n3 = $n3 + $n1;
}

echo $n3;
