<?php

function imprime_dados($nome, $habitantes, $area, $altitude, $estado)
{
    $dados = $nome . " | " . $habitantes . " | " . $area . "Km² | " . $altitude . "m | " . $estado . "\n";
    return $dados;
}

$nome = readline('Nome da cidade: ');
$habitantes = readline('Quantidade de habitantes: ');
$area = readline('Área da cidade: ');
$altitude = readline('Altitude da cidade: ');
$estado = readline('Estado da cidade: ');

$dados_cidade_1 = imprime_dados($nome, $habitantes, $area, $altitude, $estado);

$nome = readline('Nome da cidade: ');
$habitantes = readline('Quantidade de habitantes: ');
$area = readline('Área da cidade: ');
$altitude = readline('Altitude da cidade: ');
$estado = readline('Estado da cidade: ');

$dados_cidade_2 = imprime_dados($nome, $habitantes, $area, $altitude, $estado);

$nome = readline('Nome da cidade: ');
$habitantes = readline('Quantidade de habitantes: ');
$area = readline('Área da cidade: ');
$altitude = readline('Altitude da cidade: ');
$estado = readline('Estado da cidade: ');

$dados_cidade_3 = imprime_dados($nome, $habitantes, $area, $altitude, $estado);

$nome = readline('Nome da cidade: ');
$habitantes = readline('Quantidade de habitantes: ');
$area = readline('Área da cidade: ');
$altitude = readline('Altitude da cidade: ');
$estado = readline('Estado da cidade: ');

$dados_cidade_4 = imprime_dados($nome, $habitantes, $area, $altitude, $estado);

$nome = readline('Nome da cidade: ');
$habitantes = readline('Quantidade de habitantes: ');
$area = readline('Área da cidade: ');
$altitude = readline('Altitude da cidade: ');
$estado = readline('Estado da cidade: ');

$dados_cidade_5 = imprime_dados($nome, $habitantes, $area, $altitude, $estado);

echo $dados_cidade_1;
echo $dados_cidade_2;
echo $dados_cidade_3;
echo $dados_cidade_4;
echo $dados_cidade_5;

// Forma do professor:
//<?php

//function imprimeDados($nome, $habitantes, $area, $altitude, $estado) {
//    printf("%s|%d|%dkm²|%dm|%s\n", $nome, $habitantes, $area, $altitude, $estado);
//}


//Programa principal
//imprimeDados("Foz do Iguaçu", 250000, 500, 145, "Paraná-PR");
//imprimeDados("Cascavel", 300000, 420, 320, "Paraná-PR");
//imprimeDados("Chapecó", 240000, 120, 620, "Santa Catarina-SC");
//imprimeDados("Blumenau", 330000, 200, 85, "Santa Catarina-SC");
//imprimeDados("Curitiba", 1500000, 300, 850, "Paraná-PR");