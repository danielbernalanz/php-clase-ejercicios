<!DOCTYPE html>
<html>
<head>
    <title>Texto Aleatorio en PHP</title>
</head>
<body>

<?php
$size = rand(1, 6);

$red = rand(0, 255);
$hexared = $red < 16 ? "0" . dechex($red): dechex($red);

$green = rand(0, 255);
$hexagreen = $green < 16 ? "0" . dechex($green): dechex($green);

$blue = rand(0, 255);
$hexablue = $blue < 16 ? "0" . dechex($blue): dechex($blue);

printf('%02X%02X%02X', $red, $green, $blue);

echo "<h$size style='color: #$hexared$hexagreen$hexablue;'>Hola soy de color #$hexared$hexagreen$hexablue y h$size</h$size>";
?>

</body>
</html>
