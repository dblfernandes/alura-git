<?php


taboada(5);

function numerosImpares(){
    echo "Exibindo todos os numeros ímpares até 100.";
    echo PHP_EOL;

    for ($i = 1; $i <=100; $i++){
        if($i % 2 != 0){
            echo "O número $i é ímpar!";
            echo PHP_EOL;
        }
    }

}

function taboada($numero){
    echo "Exibindo a taboada do $numero.";
    echo PHP_EOL;

    for ($i =0; $i <= 10; $i++){
        echo "$numero * $i = " . $numero * $i;
        echo PHP_EOL;
    }

}