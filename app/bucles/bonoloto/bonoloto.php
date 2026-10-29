<?php
$numero_1 = rand(1, 49);

$numero_2 = rand(1, 49);
while ($numero_2 == $numero_1) {
    $numero_2 = rand(1, 49);
}

$numero_3 = rand(1, 49);
while ($numero_3 == $numero_1 || $numero_3 == $numero_2) {
    $numero_3 = rand(1, 49);
}

$numero_4 = rand(1, 49);
while ($numero_4 == $numero_1 || $numero_4 == $numero_2 || $numero_4 == $numero_3) {
    $numero_4 = rand(1, 49);
}

$numero_5 = rand(1, 49);
while ($numero_5 == $numero_1 || $numero_5 == $numero_2 || $numero_5 == $numero_3 || $numero_5 == $numero_4) {
    $numero_5 = rand(1, 49);
}

$numero_6 = rand(1, 49);
while ($numero_6 == $numero_1 || $numero_6 == $numero_2 || $numero_6 == $numero_3 || $numero_6 == $numero_4 || $numero_6 == $numero_5) {
    $numero_6 = rand(1, 49);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bonoloto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<span class="bonoloto"><?= $numero_1 ?></span>
<span class="bonoloto"><?= $numero_2 ?></span>
<span class="bonoloto"><?= $numero_3 ?></span>
<span class="bonoloto"><?= $numero_4 ?></span>
<span class="bonoloto"><?= $numero_5 ?></span>
<span class="bonoloto"><?= $numero_6 ?></span>
</body>
</html>
