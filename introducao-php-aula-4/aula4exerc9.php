<?php

$retangulos = array();

for($i=1; $i<=5; $i++) {
    $base = readline("Qual a base do retângulo?: ");
    $altura = readline("Qual a altura do retângulo?: ");
    $retangulo = array("base" => $base, "altura" => $altura);
    array_push($retangulos, $retangulo);
}

function calculo($dados){
    $area = $dados['base'] * $dados['altura'];
    return $area;
};

foreach($retangulos as $dados){
    print "A área do triângulo é: " . $area = calculo($dados) . "\n";
}