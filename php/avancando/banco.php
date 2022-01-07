<?php

#Inclui o arquivo funcoes dentro de banco
#include o arquivo não é obrigatório, se ele não existir, não estora erro. apenas warning
#Caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING) enquanto require irá lançar um erro e não permitirá a execução do programa. Você pode conferir mais detalhes na documentação de include e require.

#include 'funcoes.php';

#Inclui o arquivo funcoes dentro de banco
#require o arquivo é obrigatório, caso não existe, irá dar erro
require 'funcoes.php';


#Inclui o arquivo funcoes dentro de banco
#require_once verifica se o arquivo a ser importado já foi inserido, só insere se nao foi. o arquivo é obrigatório, caso não existe, irá dar erro
require_once 'funcoes.php';


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

$contasCorrentesString = [
    '139-885-887-85' => [
    'titular' => 'Roberto',
    'saldo' => 1500
    ],    
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

#Como o valor do indice é uma string
#o php pega o próximo índice numérico disponível.
$contasCorrentesString[] = [
    'titular' => 'Mateus',
    'saldo' => 100
];

$contasCorrentesString['139-885-887-85']['saldo'] -= 500;

foreach($contasCorrentesString as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;
}

#Para não ficar cheio de concatenações como o foreach de cima:
    #Interpolar a string dessa forma também é correto echo "O titular da conta é $conta[titular]"; Porém, só funciona dentro de strings
#Quando temos dados mais "complexos" para tratar, como arrays associativos, envolvemos esse dado em chaves:
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    #Exemplificando mais ainda:
    #    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular  $saldo"
    );
}


$contasCorrentesString['123.456.789-10'] = sacar(
    $contasCorrentesString['123.456.789-10'],
    500
);

$contasCorrentesString['123.456.689-11'] = sacar(
    $contasCorrentesString['123.456.689-11'],
    200
);

$contasCorrentesString['123.256.789-12'] = depositar(
    $contasCorrentesString['123.256.789-12'],
    900
);

titularComLetrasMaiusculas($contasCorrentesString['123.256.789-12']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>