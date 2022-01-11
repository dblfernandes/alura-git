<?php

namespace Modelo;

class Pessoa
{

    protected $cpf;
    private $nome;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    #Entretanto, não queremos que o método validaNomeTitular() de Pessoa seja público, pois queremos que ele só seja chamado dentro da própria classe ou nas classes filhas. A mesma coisa com a propriedade $nome.

    #O modificador de acesso que permite a visibilidade apenas nas classes filhas é chamado de protected. Quando qualquer membro, seja atributo ou método, é protegido (protected), ele pode ser acessado tanto pela classe na qual ele é definido quanto pelas classes filhas, mas não pelo mundo externo.

    protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}