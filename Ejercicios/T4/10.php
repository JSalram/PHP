<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <h1>Bajara de cartas</h1>
    <?php
    $valores = array(
        1 => 11,
        3 => 10,
        12 => 4,
        11 => 3,
        10 => 2
    );

    if (isset($_POST["baraja"])) {
        $baraja = $_POST["baraja"];

        $cartasEscogidas = [];
        for ($i = 0; $i < 4; $i++) {
            $carta = rand(0, 39);
            while (in_array($carta, $cartasEscogidas)) {
                $carta = rand(0, 39);
            }
            $cartasEscogidas[] = $carta;
        }

        echo "<h3>Cartas seleccionadas</h3>";
        $puntos = 0;
        $i = 0;
        foreach ($baraja as $mazo => $m) {
            foreach ($m as $carta) {
                if (in_array($i, $cartasEscogidas)) {
                    echo "$carta de $mazo";
                    if (array_key_exists($carta, $valores)) {
                        $puntos += $valores[$carta];
                        echo " => " . $valores[$carta] . " puntos<br>";
                    } else {
                        echo " => 0 puntos<br>";
                    }
                }
                $i++;
            }
        }
        echo "<p>Puntos totales: $puntos</p>";

    } else {
        $cartas = [1, 2, 3, 4, 5, 6, 7, 10, 11, 12];
        $baraja = array("copas" => [], "espadas" => [], "bastos" => [], "oros" => []);
        foreach ($baraja as $mazo => $b) {
            for ($i = 0; $i < 10; $i++) {
                $baraja[$mazo][] = $cartas[$i];
            }
        }
    }
    ?>

    <form action="10.php" method="POST">
        <?php
        foreach ($baraja as $mazo => $b) {
            foreach ($b as $carta) {
                echo '<input type="hidden" name="baraja[' . $mazo . '][]" value="' . $carta . '">';
            }
        }
        ?>
        <input type="submit" value="Mostrar cartas">
    </form>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>