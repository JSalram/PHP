<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Cuadrado y cubo</h1>

    <?php
    for ($i = 0; $i < 20; $i++) {
        $numero[] = rand(0, 100);
        $cuadrado[] = pow($numero[$i], 2);
        $cubo[] = pow($numero[$i], 3);
    }
    ?>

    <table border="1">
        <tr>
            <td>Número</td>
            <td>Cuadrado</td>
            <td>Cubo</td>
        </tr>
        <?php
        for ($i = 0; $i < count($numero); $i++) {
            echo "<tr>";
            echo "<td>$numero[$i]</td>";
            echo "<td>$cuadrado[$i]</td>";
            echo "<td>$cubo[$i]</td>";
            echo "</tr>";
        }
        ?>
    <p><a href="../index.html">Volver al índice</a></p>
    </table>
</body>

</html>