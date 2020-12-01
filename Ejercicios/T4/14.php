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

        div:nth-of-type(even) {
            background: black;
        }
        div:nth-of-type(41) {
            background: url(https://sites.google.com/site/iesplayaflamencaajedrez/home/piezas-del-ajedrez/alfil/Alfil.png?attredirects=0) no-repeat;
            background-size: 100%;
        }
    </style>
</head>

<body>
    <h1>Alfil Ajedrez</h1>

    <?php
    $alfil = array(
        [1, 0, 0, 0, 0, 0, 0, 0],
        [0, 1, 0, 0, 0, 0, 0, 1],
        [0, 0, 1, 0, 0, 0, 1, 0],
        [0, 0, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0],
        [0, 0, 1, 0, 0, 0, 1, 0],
        [0, 1, 0, 0, 0, 0, 0, 1]
    );

    for ($i = 0; $i < 8; $i++) {
        for ($j = 0; $j < 8; $j++) {
            if ($alfil[$i][$j]) {
                echo '<div style="background: lightgreen"></div>';
            } else {
                echo "<div></div>";
            }
        }
        echo '<div style="display: none"></div>';
        echo '<br>';
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>