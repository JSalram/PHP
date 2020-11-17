<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
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
    <h1>6.- Caída Libre</h1>

    <form action="6.php" method="POST">
        <span>
            t = √2*
            <input type="number" name="h" id="h" step="any">
             / g
        </span>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        $h = $_POST["h"];

        if ($h != "")
        {
            $t = sqrt(2 * $h / 9.81);
            echo "<b>t => </b>" . $t . "s";
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>