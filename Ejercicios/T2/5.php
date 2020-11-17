<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
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
    <h1>5.- Ecuación 1er grado</h1>

    <form action="5.php" method="POST">
        <span>
            <input type="number" name="a" id="a" step="any">
            x + 
            <input type="number" name="b" id="b" step="any">
             = 0
        </span>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($a != "" && $b != "")
        {
            $sol = (-$b) / $a;
            echo "<b>x => </b>" . $sol;
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>