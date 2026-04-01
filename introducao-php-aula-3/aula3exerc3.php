<?php

function equacao($num)
{
    $y = (5 * $num) + (2 * $num) + 3;
    return $y;
}

for ($i = 1; $i <= 5; $i++) {
    $num = (int)readline("Fale um número: ");
    $resultado = equacao($num);
    echo $resultado . "\n";
}
