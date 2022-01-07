<?php


#array associativo - chave e valor
$conta1 = [
    'titular' => 'Daniel',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Joao',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i =0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}