<?php

$idadeList = [21, 22, 23, 24, 28, 30];

for($i=0; $i < 6; $i++){
    echo $idadeList[$i] . PHP_EOL;
}

for($i=0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}