<?php

function area($n1)
{
    $area = 3.14 * ($n1 * $n1);
    return $area;
}

function circunferencia($n1)
{
    $circunferencia = 2 * 3.14 * $n1;
    return $circunferencia;
}

for ($i = 1; $i <= 3; $i++) {
    $n1 = (int)readline("Qual o valor do raio?");

    $area = area($n1);
    echo $area . "\n";
    $circunferencia = circunferencia($n1);
    echo $circunferencia . "\n";
}
