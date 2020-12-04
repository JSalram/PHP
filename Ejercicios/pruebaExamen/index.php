<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Examen</title>
    <style>
        body {
            background: lightcyan;
        }

        h1 {
            text-align: center;
        }

        p:nth-of-type(1) {
            text-align: center;
            font-size: 5rem;
        }

        span {
            font-size: 2rem;
        }

        button {
            display: block;
            margin: auto;
        }
    </style>
</head>

<body>
    <h1>DisFruta con PHP</h1>

    <?php
    $nFrutas = rand(7, 20);
    echo "<h2>$nFrutas frutas</h2>";

    echo "<p>";
    for ($i = 0; $i < $nFrutas; $i++) {
        $f = rand(127815, 127827);
        $frutas[] = $f;
        echo "&#$f;";
    }
    echo "</p>";

    echo "<h2>Resultados</h2>";
    sort($frutas);

    $veces = 0;
    $f = $frutas[0];
    foreach ($frutas as $fruta) {
        if ($fruta == $f) {
            $veces++;
        } else {
            echo "<p>La fruta <span>&#$f</span> está <strong>$veces</strong>";
            if ($veces > 1) {
                echo " veces en la lista.</p>";
            } else {
                echo " vez en la lista.</p>";
            }
            $f = $fruta;
            $veces = 1;
        }
    }
    echo "<p>La fruta <span>&#$f</span> está <strong>$veces</strong>";
    if ($veces > 1) {
        echo " veces en la lista.</p>";
    } else {
        echo " vez en la lista.</p>";
    }
    ?>
    <button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button>

</body>

</html>