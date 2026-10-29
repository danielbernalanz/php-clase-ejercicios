<?php
$edad = -3;
print("Con edad " . $edad . "\n");
switch (true) {
    case $edad >= 0 && $edad <= 3:
        print("Bebe");
        break;
    case $edad >= 4 && $edad <= 11:
        print("Niño");
        break;
    case $edad >= 12 && $edad <= 17:
        print("Adolescente");
        break;
    case $edad >= 18 && $edad <= 25:
        print("Adulto");
        break;
    case $edad >= 26 && $edad <= 60:
        print("Adulto con responsabilidades");
        break;
    case $edad >= 61 && $edad <= 90:
        print("Anciano");
        break;
    case $edad >= 90 && $edad <= 100:
        print("Suertudo");
        break;
    default:
        print("Error");
}