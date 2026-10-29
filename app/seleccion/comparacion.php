<?php
$mes = rand(1,12);
$msj = match ($mes) {
    1, 3,5,7,8,10,12 =>31,
    4,6,9,11=>30,
    2=>28,
    default=>"error"
};
print_r("Mes " . $mes . " tiene " .  $msj . " dias");