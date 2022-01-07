<?php

#Sempre podemos informar na função o tipo de dado que queremos receber. Além disso, podemos informar também o tipo de dado sendo retornado. Para isso, depois do fechamento dos parênteses, usamos : seguidos do tipo em questão.
#Informando os tipos (permitidos a partir do PHP7) é possível controlar o erro de tipos invalidos na conversão.
function depositar(array $conta, float $valorADepositar): array {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem($mensagem){
    echo $mensagem;
}

#A função, por si, está alterando o valor da "cópia" que recebeu, e não é o que queremos. Ao invés disso, precisamos receber o endereço onde a $conta está armazenada na memória, e que, caso esse valor seja alterado, isso se reflita na variável enviada. Isso é o conceito de passagem por referência.
#Para tornarmos esses conceitos mais claros, vamos colocá-los em prática. Ao invés de simplesmente recebermos a $conta na função titularComLetrasMaiusculas(), vamos receber o endereço para a conta com &$conta. Esse & informa que estamos recebendo a variável em si, e não uma cópia dela.
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}