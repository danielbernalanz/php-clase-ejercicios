<?php
$mes = rand(1,12);
$nombre=null;
switch ($mes) {
    case 1:
        $nombre= $nombre==null?"Enero":$nombre;
    case 3:
        $nombre= $nombre==null?"Marzo":$nombre;
    case 5:
        $nombre= $nombre==null?"Mayo":$nombre;
    case 7:
        $nombre= $nombre==null?"Julio":$nombre;
    case 8:
        $nombre= $nombre==null?"Agosto":$nombre;
    case 10:
        $nombre= $nombre==null?"Octubre":$nombre;
    case 12:
        $nombre= $nombre==null?"Diciembre":$nombre;
        $dias = 31;
        break;
    case 2:
        $nombre = "Febrero";
        $dias = "29 o 28";
        break;
    case 4:
        $nombre= $nombre==null?"Abril":$nombre;
    case 6:
        $nombre= $nombre==null?"Junio":$nombre;
    case 9:
        $nombre= $nombre==null?"Septiembre":$nombre;
    case 11:
        $nombre= $nombre==null?"Noviembre":$nombre;
        $dias = 30;
        break;
    default:
        $dias = false;

}
print_r($nombre . "\n" . $dias);