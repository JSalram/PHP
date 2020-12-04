<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Cartas</title>
    <link rel="stylesheet" href="examen.css">
</head>

<body>
    <h1>Muestra Cartas (RESULTADO)</h1>

    <?php
    if (!isset($_POST["n"]) || empty($_POST["n"])) {
        echo "No ha especificado un número de cartas.";
        echo "<br>";
    } elseif ($_POST["n"] < 3 || $_POST["n"] > 12) {
        echo "El número de cartas solicitado no se encuentra en el rango permitido.";
        echo "<br>";
    } else {
        $n = $_POST["n"];
        $palo = $_POST["palo"];

        for ($i = 0; $i < $n; $i++) {
            $carta = $palo . rand(1, 10);

            if ($i == 0) {
                $comp = $carta;
                $seg = false;
            } elseif (!$seg) {
                $seg = $comp == $carta;
            }
            $comp = $carta;

            echo "<img src='img/$carta.svg' alt='$carta'>";
        }

        if ($seg) {
            echo "<p>Hay cartas iguales seguidas.</p>";
        } else {
            echo "<p>No hay cartas iguales seguidas.</p>";
        }
    }
        echo '<a href="formulario.php">Volver al formulario.</a>';
    ?>

    <footer>
        <p><cite>Javier Salado Ramos - 2º DAW</cite></p>
    </footer>
</body>

</html>