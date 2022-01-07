<?php

$x = 10;

echo $x;

function teste(){
    global $x;
    echo $x;
}

echo var_dump($x);