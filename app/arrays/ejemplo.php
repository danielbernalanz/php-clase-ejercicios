<?php
$notas = array_fill(0,10,0);

$inicializa = fn()=> rand(1, 10);

$notas = array_map($inicializa, $notas);
var_dump($notas);


$media = array_sum($notas) / count($notas);

var_dump(max($notas));
var_dump(min($notas));
var_dump($media);