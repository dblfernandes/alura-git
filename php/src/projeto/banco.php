<?php

/* require_once 'projeto/Conta.php';
require_once 'projeto/Endereco.php';
require_once 'projeto/Titular.php';
require_once 'projeto/CPF.php'; */

#Retira a necessidade de trabalhar com Require
#Recomendação PSR-4
require_once 'autoload.php';

#Utiliza USE para importar as classes sendo utilizadas
use Modelo\Endereco;
use Modelo\Conta\Conta;
use Modelo\CPF;
use Modelo\Conta\Titular;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$primeiraConta = new Conta(new Titular(new CPF('123.456.789-10'), 'Daniel', $endereco));

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->titular->recuperaNome() . PHP_EOL;
echo $primeiraConta->titular->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco));
var_dump($segundaConta);

$endereco2 = new Endereco('A', 'b', 'c', '1D');
new Conta(new Titular(new CPF('123'), 'Abcdefg', $endereco2));
echo Conta::recuperaNumeroDeContas();