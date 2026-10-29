<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de PHP en HTML</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<div class="container">

    <div class="box">
        <h2>Texto enunciado breve</h2>
        <ul>
            <li>Items enunciado</li>
            <li>...</li>
        </ul>
    </div>

    <!-- Sección para el resultado de PHP -->
    <div class="box">
        <h2>Resultado</h2>
        <hr>
        <table border="1px">
            <tr>
                <th>Decimal</th>
                <th>Caracter ASCII</th>
                <th>Binario</th>
                <th>Octal</th>
                <th>Hexadecimal</th>
            </tr>

            <?php
            for ($i = 0; $i <= 100; $i++) {
                printf("<tr>");
                printf("<td>%d</td>", $i);
                printf("<td>%c</td>", $i);
                printf("<td>%b</td>", $i);
                printf("<td>%o</td>", $i);
                printf("<td>%x</td>", $i);
                printf( "</tr>");

            }
            ?>
        </table>
    </div>

</div>
</body>
</html>