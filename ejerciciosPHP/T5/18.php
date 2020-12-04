<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>

<body>
    <h1>Decimal - Binario</h1>

    <form action="18.php" method="POST">
        <label for="n">Número decimal:</label><br>
        <input type="number" name="n" id="n" autofocus>
        <br><input type="submit" value="Enviar">
    </form>

    <?php
    include "1-14.php";

    if (isset($_POST["n"])) {
        echo "<hr>";

        $n = $_POST["n"];
        $num = "";
        while ($n > 0) {
            $num = $num . (string)($n % 2);
            $n = (int)($n / 2);
        }

        echo "<p>" . $_POST["n"] . " == " . voltea($num) . "</p>";
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>