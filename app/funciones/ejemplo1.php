<?php
// Declara 2 variables
$nombre = "Maria1";
$ciudad = "Zaragoza";

// Declara una función que recibe dos parámetros:
// El primero por referencia (&$p1) y el segundo por valor ($p2)
function ejemplo1(&$p1, $p2) {
    $p1 = "Pedro";    // Modifica el parámetro por referencia
    $p2 = "Madrid";   // Modifica el parámetro por valor
}

// Comprobación de los valores ANTES de la función
echo "--- ANTES de ejecutar la función ---<br>";
var_dump($nombre); // Muestra: string(6) "Maria1"
var_dump($ciudad); // Muestra: string(8) "Zaragoza"

// Ejecutamos la función pasando las variables
ejemplo1($nombre, $ciudad);

// Comprobación de los valores DESPUÉS de la función
echo "<br>--- DESPUÉS de ejecutar la función ---<br>";
var_dump($nombre); // Muestra: string(5) "Pedro"    <- ¡HA CAMBIADO!
var_dump($ciudad); // Muestra: string(8) "Zaragoza" <- Sigue igual
