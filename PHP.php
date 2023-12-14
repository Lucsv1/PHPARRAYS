<?php

$notas = [10, 8, 7, 5];

var_dump($notas);

$ordem = $notas;
sort($ordem);


foreach ($ordem as $value) {

    echo $value . PHP_EOL;
}