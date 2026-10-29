<?php
function get_invoce($productos)
{
    foreach ($productos as $producto => $detalles) {
        echo "Nombre: " . $producto . "<br>";
        echo "Precio: " . $detalles['precio'] . "<br>";
        echo "Cantidad:" . $detalles['unidades'] . "<br>";
        echo "Total: " . $detalles['precio'] * $detalles['unidades'] . "<br>";
        echo "<br>";
    }
}

function get_report($productos){
    $inicial = 4000;
    foreach ($productos  as $producto => $detalles) {
        echo $producto . " queda " . ($inicial - $detalles['unidades']) . "<br>";
    }
}
