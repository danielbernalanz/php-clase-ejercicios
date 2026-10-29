<?php
$imagenes = ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLfQC7NWrvdE6j7IuB4uRK8l5gX8fhnewhs46fGVKG-A&s=10", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_NoOrvn4UCuJqIg2kB1aeNtUz_hBice9OJM7hlz8QeUUI28WA-aHB_KCK&s=10", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSCvf5Pk_QIESIDnNEYt8ir93_cEN_-tM5yU4YPHs0TVPcTNWj5ooP0zE&s=10", "https://img.rtve.es/n/16445771?w=1600"];
$imagenAleatoria = fn() => rand(0, sizeof($imagenes) - 1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3">
    <title>Title</title>
</head>
<body>
<img src="<?=$imagenes[$imagenAleatoria()] ?>" height="200px" alt="">
<img src="<?=$imagenes[$imagenAleatoria()] ?>" height="200px" alt="">
<img src="<?=$imagenes[$imagenAleatoria()] ?>" height="200px" alt="">
</body>
</html>
