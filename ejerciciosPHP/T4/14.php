<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
    <style>
        body {
            line-height: 0;
        }
        div {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
        img {
            max-width: 100%;
            max-height: 100%;
        }
        div:nth-of-type(even) {
            background: black;
        }
    </style>
</head>

<body>
    <h1>Alfil Ajedrez</h1>

    <?php

    if (isset($_POST["x"])) {
        $x = $_POST["x"] - 1;
        $y = $_POST["y"] - 1;

        for ($i = 0; $i < 8; $i++) {
            for ($j = 0; $j < 8; $j++) {
                if (
                    abs($i - $y) == abs($j - $x)
                    && $j != $x
                ) {
                    echo '<div><img src="alfil.png"
                        style="filter: invert(1)"/></div>';
                } else if ($i == $y && $j == $x) {
                    echo '<div ><img src="alfil.png"/></div>';
                } else {
                    echo "<div></div>";
                }
            }
            echo '<div style="display: none"></div>';
            echo '<br>';
        }
    }
    ?>

    <form action="14.php" method="POST">
        <label for="x">X: </label>
        <input type="number" name="x" id="x" min="1" max="8" autofocus>
        <label for="y">Y: </label>
        <input type="number" name="y" id="y" min="1" max="8">
        <input type="submit" value="Enviar">
    </form>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>