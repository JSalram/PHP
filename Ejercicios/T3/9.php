<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <style>
        table {border-collapse: collapse}
        tr, td {border: 2px solid black}
        td {padding: 5px}
    </style>
</head>
<body>
    <h1>9.- Dígitos</h1>

    <?php if (isset($_POST["n"])): ?>
        <?php
            $n = $_POST["n"];

            $i = 1;
            while ($n < -9 || $n > 9)
            {
                $n /= 10;
                $i++;
            }

            echo "El número introducido tiene $i dígito(s)";
        ?> 
    <?php else: ?>
        <form action="9.php" method="POST">
            <label for="n">Número: </label><br>
            <input type="number" name="n" id="n" autofocus>
            <br><input type="submit" value="Enviar">
        </form>
    <?php endif; ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>