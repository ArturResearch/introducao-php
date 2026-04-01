<?php

function area($base, $altura)
{
    $area = $base * $altura;
    return $area;
}

function perimetro($base, $altura)
{
    $perimetro = ($base * 2) + ($altura * 2);
    return $perimetro;
}

for ($i = 1; $i <= 3; $i++) {
    $base = (int)readline("Qual a base em cm do retãngulo?: ");
    $altura = (int)readline("Qual a altura em cm do retãngulo?: ");
    $area = area($base, $altura);
    echo "Área: " . $area . "cm²\n";
    $perimetro = perimetro($base, $altura);
    echo "Perímetro: " . $perimetro . "cm\n";
}
