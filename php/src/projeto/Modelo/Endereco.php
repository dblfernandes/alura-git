<?php

namespace Modelo;

Class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    #Note que definimos o $numero como uma string, e não como um inteiro. Isso porque, se trabalharmos com o $numero sendo um inteiro, podemos ter desperdícios de memória (se utilizarmos números muito grandes) ou termos uma representação não muito consistente. Por exemplo, não conseguiríamos representar "71b" com um inteiro. A ideia central é: se não realizaremos cálculos com os valores de alguma propriedade ou variável, não precisamos defini-la como um tipo numérico.

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
        {
            return $this->cidade;
        }

    public function recuperaBairro(): string
        {
            return $this->bairro;
        }

    public function recuperaRua(): string
        {
            return $this->rua;
        }

    public function recuperaNumero(): string
        {
            return $this->numero;
        }

}