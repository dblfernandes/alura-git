<?php


#array associativo - chave e valor
#indice e valor
$contasCorrentes = [
    1232132332 => [
        'titular' => 'Daniel',
        'saldo' => 1000
    ],
    4232212323 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    2445556554 => [
        'titular' => 'Joao',
        'saldo' => 300
    ]
];

$contasCorrentes[32588756958] = [
    'titular' => 'Claudia',
    'saldo' => 15000
];

#Se eu não setar o valor do indice,
#O php pega o valor de indice mais alto e incrementa
$contasCorrentes[] = [
    'titular' => 'Roberto',
    'saldo' => 1500
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

$contasCorrentesString['139-885-887-85'] = [
    'titular' => 'Roberto',
    'saldo' => 1500
];

#Como o valor do indice é uma string
#o php pega o próximo índice numérico disponível.
$contasCorrentesString[] = [
    'titular' => 'Mateus',
    'saldo' => 100
];

foreach($contasCorrentesString as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}