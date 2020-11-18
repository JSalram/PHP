<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>13.- Ordena números</h1>

    <form action="13.php" method="POST">
        <label for="n1">Número 1: </label>
        <input type="number" name="n1" id="n1"><br>
        <label for="n2">Número 2: </label>
        <input type="number" name="n2" id="n2"><br>
        <label for="n3">Número 3: </label>
        <input type="number" name="n3" id="n3"><br>
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $n = [
            $_POST["n1"],
            $_POST["n2"],
            $_POST["n3"]
        ];
        
        echo "Array original: <br>";
        foreach ($n as $i => $num) {
            echo $num;
            if ($i != count($n)-1)
            {
                echo ", ";
            }
        }
        echo "<br><br>";

        echo "Array ordenado: <br>";
        sort($n, SORT_NUMERIC);
        foreach ($n as $i => $num) {
            echo $num;
            if ($i != count($n)-1)
            {
                echo ", ";
            }
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>