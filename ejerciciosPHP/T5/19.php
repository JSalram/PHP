<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>

<body>
    <h1>Convierte base</h1>

    <form action="19.php" method="POST">
        <label for="n">Número decimal:</label><br>
        <input type="number" name="n" id="n" autofocus>
        <br>
        <input type="radio" name="base" id="dec" value="10">
        <label for="dec">Decimal</label>
        <input type="radio" name="base" id="bin" value="2">
        <label for="bin">Binario</label>
        <br>
        <input type="radio" name="base" id="hex" value="16">
        <label for="hex">Hexadecimal</label>
        <input type="radio" name="base" id="oct" value="8">
        <label for="oct">Octal</label>
        <br><input type="submit" value="Enviar">
    </form>

    <?php
    include "1-14.php";

    if (isset($_POST["n"]) && isset($_POST["base"])) {
        echo "<hr>";

        $hex = [
            0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
            "A", "B", "C", "D", "E", "F"
        ];

        $n = $_POST["n"];
        $base = (int)($_POST["base"]);
        $num = "";
        while ($n > 0) {
            $sig = $n % $base;
            if ($base == 16) {
                if ($n <= 16) {
                    $sig = $n;
                }
                $sig = $hex[$sig];
            }
            $num = $num . (string)($sig);
            $n = (int)($n / $base);
        }
        if ($base != 16) {
            $num = voltea($num);
        } else {
            $num = strrev($num);
        }

        echo "<p>" . $_POST["n"] . " == " . $num . "</p>";
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>