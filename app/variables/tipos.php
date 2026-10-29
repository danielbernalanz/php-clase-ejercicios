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
        <table border="1px" >
            <tr>
                <th>Decimal</th>
                <th>Binario</th>
                <th>Octal</th>
                <th>Hexadecimal</th>
            </tr>

        <?php
               for ($i = 0; $i <= 16; $i++) {
                   echo "<tr>";
                   echo "<td> $i</td>";
                   echo "<td>" . decbin($i) . "</td>";
                   echo "<td>" . decoct($i) . "</td>";
                   echo "<td>" . dechex($i) . "</td>";
                   echo "</tr>";

               }
        ?>
        </table>
    </div>

</div>
</body>
</html>