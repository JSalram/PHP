<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <style>
        input[type=number] {
            width: 30px;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>
    <h1>9.- Ecuación 2º grado</h1>

    <form action="9.php" method="POST">
        <span>
            <input type="number" name="a" id="a" step="any">
            x² + 
            <input type="number" name="b" id="b" step="any">
            x +
            <input type="number" name="c" id="c" step="any">
            = 0
        </span>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        if ($a != "" && $b != "" && $c != "")
        {
            $sol1 = (-$b + (sqrt(pow($b, 2) - 4 * $a * $c)))
             / 2 * $a;
            $sol2 = (-$b - (sqrt(pow($b, 2) - 4 * $a * $c)))
             / 2 * $a;
            echo "<b>x => </b>" . $sol1 . "<br>";
            echo "<b>x => </b>" . $sol2;
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>