<?php
require("funciones.php");

$productos = [
        'lechuga' => ['unidades' => 200, 'precio' => 0.90],
        'tomates' => ['unidades' => 2000, 'precio' => 2.15],
        'cebollas' => ['unidades' => 3200, 'precio' => 0.49],
        'fresas' => ['unidades' => 4800, 'precio' => 4.50],
        'manzanas' => ['unidades' => 2500, 'precio' => 2.10],
];
$opcion = $_POST['enviar'] ?? NULL;
switch ($opcion) {
    case 'Comprar':
        $invoce = get_invoce($productos);
        $report = get_report($productos);
        break;
    default:
        $form;
}
$form = get_invoce($productos)
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de productos</title>

    <style>
        .tienda {
            max-width: 550px;
            margin: 30px auto;
            padding: 25px;
            background: #f0fdf4;
            border: 1px solid #86efac;
            border-radius: 12px;
            font-family: Verdana, sans-serif;
            color: #14532d;
        }

        .tienda h2 {
            text-align: center;
            color: #166534;
        }

        .tienda form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .tienda label {
            font-weight: bold;
        }

        .tienda input,
        .tienda select {
            padding: 10px;
            border: 1px solid #86efac;
            border-radius: 6px;
            font-size: 1rem;
            background: white;
            color: #222;
        }

        .tienda button {
            padding: 12px;
            background: #16a34a;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .tienda button:hover {
            background: #15803d;
        }

        .factura {
            margin-top: 20px;
            padding: 15px;
            background: white;
            border: 1px solid #bbf7d0;
            border-radius: 8px;
            color: #222;
        }

        .error {
            color: #b91c1c;
            font-weight: bold;
        }

        .exito {
            color: #15803d;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php if (isset($form)): ?>
    <div class="tienda">
        <h2>Tienda de productos</h2>

        <form action="tienda.php" method="post">
            <label for="producto">Selecciona un producto:</label>

            <select name="producto" id="producto">
                <option value="lechuga">Lechuga - 0,90 €</option>
                <option value="tomates">Tomates - 2,15 €</option>
                <option value="cebollas">Cebollas - 0,49 €</option>
                <option value="fresas">Fresas - 4,50 €</option>
                <option value="manzanas">Manzanas - 2,10 €</option>
            </select>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad"
                   min="1" placeholder="Introduce la cantidad">

            <button type="submit">Comprar</button>
        </form>
    </div>
<?php else : ?>
    <?php
        echo get_invoce($productos);
        echo get_report($productos)
    ?>

<?php endif ?>
</body>
</html>
