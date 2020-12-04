<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <h1>Binario - Decimal</h1>

    <form action="17.php" method="POST">
        <label for="n">Número binario:</label><br>
        <input type="number" name="n" id="n" autofocus>
        <br><input type="submit" value="Enviar">
    </form>

    <?php
    include "1-14.php";

    if (isset($_POST["n"])) {
        echo "<hr>";

        $n = voltea($_POST["n"]);
        $num = 0;
        for ($i = 0; $i < digitos($n); $i++) {
            if (digitoN($n, $i)) {
                $num += potencia(2, $i);
            }
        }

        echo "<p>" . $_POST["n"] . " == $num</p>";
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>