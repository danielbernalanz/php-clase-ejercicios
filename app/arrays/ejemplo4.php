<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$numeros[] = 12;
var_dump($numeros);
array_push($numeros, 1, 2, 3, 4, 5, 6, 7, 8, 9);
var_dump($numeros);
array_unshift($numeros, 1, 2, 3, 4, 5, 6, 7, 8, 9);
var_dump($numeros);
array_splice($numeros, 0, 1, [1, 2, 3, 4, 5, 6, 7, 8, 9,0]);
var_dump($numeros);

foreach ($numeros as $key => $numero) {
    var_dump("El numero de la posicion $key es $numero");;
}