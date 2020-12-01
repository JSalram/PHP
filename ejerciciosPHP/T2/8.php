<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>8.- Nota boletín</h1>

    <form action="8.php" method="POST">
        <label for="n1">Nota 1:</label>
        <input type="number" name="n1" id="n1" min=0 max=10 step="any"><br>
        <label for="n2">Nota 2:</label>
        <input type="number" name="n2" id="n2" min=0 max=10 step="any"><br>
        <label for="n3">Nota 3:</label>
        <input type="number" name="n3" id="n3" min=0 max=10 step="any"><br>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        
        if ($n1 != "" && $n2 != "" && $n3 != "")
        {
            $media = ($n1 + $n2 + $n3) / 3;
            echo "<b>Media => </b>" . round($media, 2);
            echo "<br>";

            if ($media >= 9 && $media <= 10)
            {
                echo "Has obtenido un <b>SOBRESALIENTE</b>";
            }
            elseif ($media >= 8)
            {
                echo "Has obtenido un <b>NOTABLE</b>";
            }
            elseif ($media >= 6)
            {
                echo "Has obtenido un <b>BIEN</b>";
            }
            elseif ($media >= 5)
            {
                echo "Has obtenido un <b>SUFICIENTE</b>";
            }
            else
            {
                echo "Has obtenido un <b>INSUFICIENTE</b>";
            }

        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>