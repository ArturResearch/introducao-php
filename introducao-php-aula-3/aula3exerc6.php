<?php

function calculo($a, $b, $c)
{
    $media = (($a * 3) + ($b * 5) + ($c * 2)) / 10;
    return $media;
}

$a = readline("Fale o número de A: ");
$b = readline("Fale o número de B: ");
$c = readline("Fale o número de C: ");

$media = calculo($a, $b, $c);
echo "A média ponderada em que A possui peso 3, B possui peso 5 e C possui peso 2 é " . $media . "\n";
