<?php

for ($i = 1; $i <= 5; $i++) {
    $nome = readline('qual o seu nome?: ');
    $peso = readline('qual o seu peso?: ');
    $altura = readline('qual a sua altura?: ');

    $imc = $peso / ($altura * $altura);
    echo $nome . "\n";
    echo $peso . "\n";
    echo $altura . "\n";
    echo $imc . "\n";
}
