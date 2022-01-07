<?php


$idadeListout = array(15,18,20,35,40); #Um array Antes do php 5.4 era escrito assim


$idadeList = [21, 22, 23, 24, 28, 30];
#list() - uma função que recebe variáveis e faz com que os valores nos índices da lista sejam passados na mesma ordem:
list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

#Apaga um item da lista
unset($idadeList[1]);
unset($contasCorrentesString['139-885-887-85']);

echo $idadeList[0];

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