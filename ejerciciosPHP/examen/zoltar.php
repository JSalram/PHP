<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoltar</title>
    <style>
        body {
            text-align: center;
        }

        footer {
            border-top: black 1px solid;
            margin-top: 2em;
        }

        footer cite {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Zoltar: Adivina el número</h1>

    <?php
    if (!isset($_POST["r"])) {
        $r = rand(1, 100);
        $i = 0;
    } elseif (empty($_POST["n"]) || $_POST["n"] < 0) {
        $r = $_POST["r"];
        $i = $_POST["i"];
    } else {
        $r = $_POST["r"];
        $i = ++$_POST["i"];
    }

    if (!isset($_POST["n"]) || $_POST["n"] != $r) {
    ?>
        <form action="zoltar.php" method="POST">
            <label for="n">Número: </label>
            <input type="number" name="n" id="n" autofocus>
            <input type="hidden" name="r" value="<?php echo $r ?>">
            <input type="hidden" name="i" value="<?php echo $i ?>">
            <input type="submit" value="Enviar">
        </form>
    <?php
        if (isset($_POST["n"])) {
            $n = $_POST["n"];
            echo "<br>";

            if (empty($n)) {
                echo "No se ha escrito ningún número";
            } elseif ($n < 0) {
                echo "No ha escrito un número entero positivo";
            } elseif ($n != $r) {
                if ($n < $r) {
                    echo "Demasiado pequeño";
                } else {
                    echo "Demasiado grande";
                }
            }
        }
    } else {
        echo "¡Lo lograste! Has necesitado $i intentos para conseguirlo.";
        echo "<br><br>";
        echo '<form action="zoltar.php" method="POST">
        <input type="submit" value="Volver a jugar">
        </form>';
    }
    ?>

    <footer>
        <p><cite>Javier Salado Ramos - 2º DAW</cite></p>
    </footer>

</body>

</html>