<?php

namespace Modelo\Conta;

#Utiliza USE para importar as classes sendo utilizadas
use Modelo\Pessoa;
use Modelo\CPF;
use Modelo\Endereco;


class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, String $nome, Endereco $endereco)
    {
        #Nosso objetivo agora é que, ao criarmos uma nova instância de Titular, por exemplo, seja chamado o instrutor da classe base (também chamada de "classe mãe" ou "classe pai"). Isso pode ser feito por meio da palavra reservada parent, que se refere à classe mãe daquela que está fazendo a execução. A partir dela, poderemos chamar o construtor __construct() passando o $nome e o $cpf recebidos por parâmetro.

        parent::__construct($nome, $cpf);
        #$this->cpf = $cpf;
        #$this->validaNomeTitular($nome); 
        #$this->nome = $nome;
        $this->endereco = $endereco;
               
    }

}