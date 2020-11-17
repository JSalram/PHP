<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>7.- Factura</h1>

    <form action="7.php" method="POST">
        <label for="precio">Precio sin IVA: </label><br>
        <input type="number" name="precio" id="precio">
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $precio = $_POST["precio"];
        $precioIVA = (double)($precio * 0.21 + $precio);

        if ($precio != "")
        {
            echo "<b>Precio con IVA ==> </b>" . $precioIVA;
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>