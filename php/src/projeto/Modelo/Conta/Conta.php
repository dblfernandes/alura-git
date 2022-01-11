<?php

#Podemos ter dois arquivos com o mesmo nome no sistema operacional, desde que eles estejam em pastas diferentes. O PHP fornece essa separação por meio de namespaces. Se temos uma pasta chamada "modelo", os arquivos contidos nela também estarão em um namespace chamado "Modelo". 
namespace Modelo\Conta;

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

#A partir do PHP 7.4 é possível declarar uma variável tipada
# public string $cpfTitular;

#Existe ainda um detalhe. Perceba que tivemos que informar se os atributos são públicos ou privados, ou seja, se é possível acessá-los por meio de referências ou não. Por padrão, quando não informamos um modificador de acesso para nossas funções, o PHP assume que elas são públicas.

#Construtor da classe. Chamado toda vez que uma nova instancia é criada
public function __construct(Titular $titular)
{
    $this->titular = $titular;
    $this->saldo = 0;

    #é o mesmo que Conta::$numeroDeContas (self chama a classe em si)
    self::$numeroDeContas++;
}

#Executa após o Garbage Collector apagar a instância da memória
#A instância é apagada pelo GC quando não existe referenciação para ela (quando não tem mais variável apontando para ela).
#Executado quando a instancia deixa de existir na memória.
public function __destruct()
{
    self::$numeroDeContas--;
}

#Na verdade temos, e o nome da variável que contém essa referência é $this, uma variável padrão do PHP que se refere à referência atual que chamou o método. Portanto, se $umaConta chamar o método sacar(), o valor de $this será a referência para o objeto representado por $umaConta. Com isso, não precisaremos mais receber o parâmetro $contaASacar.
#$THIS faz com que o método acesse o dado de referencia, o dado do objeto que chamou a função.
public function saca(float $valorASacar)
{

    $tarifaSaque = $valorASacar * 0.05;
    $valorSaque = $valorASacar + $tarifaSaque;
    if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            #O saldo dessa referencia (do objeto na memoria) será atualizado
            $this->saldo -= $valorASacar;
        }
}

public function deposita(float $valorADepositar): void
{
    if ($valorADepositar < 0) {
        echo "Valor precisa ser positivo";
    } else {
        $this->saldo += $valorADepositar;
    }
}

#Função utilizando a técnica Early Return para facilitar a leitura do código. (adição de return e remoção do else)
public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

     #Esse método não é mais útil, pois o construtor já força definir um cpf do titular
    /*
    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }
    */

    #Esse método não é mais útil, pois o construtor já força definir um nome do titular
    /*
    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
    */

public static function recuperaNumeroDeContas(): int
{
    return self::$numeroDeContas;
}

}