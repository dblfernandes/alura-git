<?php

namespace Modelo;

class Funcionario extends Pessoa
{
    private $nome;
    private $cpf;
    private $cargo;

    public function __construct(CPF $cpf, String $nome, String $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;   
    }

    public function alteraNome(string $nome): void
{
    $this->validaNome($nome);
    $this->nome = $nome;
}

}