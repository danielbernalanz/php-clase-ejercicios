<?php
$numero = range(1,100);

function calcularMultiplo($valor){
    if ($valor % 5 == 0) {
        return true;
    }
    return false;
}
$resultado = array_filter($numero,'calcularMultiplo');
$resultado = array_reduce();
var_dump($resultado);