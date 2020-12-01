<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <style>
        table {border-collapse: collapse}
        tr, td {border: 2px solid black}
        td {padding: 5px}
    </style>
</head>
<body>
    <h1>8.- Tabla Multiplicar</h1>

    <?php if (isset($_POST["n"])): ?>
        <table>
            <?php
                $n = $_POST["n"];
                for ($i = 1; $i <= 10; $i++)
                {
                    echo "<tr><td>$n x $i</td><td>" . $n*$i . "</td></tr>";
                }
            ?>
        </table>
    <?php else: ?>
        <form action="8.php" method="POST">
            <label for="n">Número: </label><br>
            <input type="number" name="n" id="n">
            <br><input type="submit" value="Enviar">
        </form>
    <?php endif; ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>