<?php
$opcion = null;

if (isset($_POST['enviar'])) {
    $opcion = $_POST['enviar'];
}

switch ($opcion) {
    case "Enviar":
        $msg = "Has presionado enviar";
        break;
    case "Primero":
        $msg = "Has presionado primero";
        break;
    case "Imprimir":
        $msg = "Has presionado imprimir";
        break;
    case "Salir":
        $msg = "Has presionado salir";
        break;
    case "Saludar":
        $msg = "Has presionado saludar";
        break;
    case "Entrar":
        $msg = "Has presionado entrar";
        break;
    default:
        $msg = "Has recargado la pagina";
}
var_dump($msg);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="index.php">
    <input type="submit" value="Enviar" name="enviar">
    <input type="submit" value="Primero" name="enviar">
    <input type="submit" value="Imprimir" name="enviar">
    <input type="submit" value="Salir" name="enviar">
    <input type="submit" value="Saludar" name="enviar">
    <input type="submit" value="Entrar" name="enviar">
</form>
</body>
</html>
