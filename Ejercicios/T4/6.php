<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <h1>Pares - Impares</h1>

    <?php
    if (!isset($_POST["i"])) {
        $i = 0;
    } else {
        $i = $_POST["i"];
    }

    if ($i < 7) {
    ?>

        <form action="6.php" method="POST">
            <label for="n">Número:</label><br>
            <input type="number" name="n" id="n" autofocus>

            <?php
            if (isset($_POST["n"]) && $_POST["n"] != "") {
                $n = $_POST["n"];

                if (isset($_POST["numeros"])) {
                    $numeros = $_POST["numeros"];
                }
                $numeros[] = $n;
                foreach ($numeros as $n) {
                    echo '<input type="hidden" name="numeros[]" value="' . $n . '">';
                }
                $i++;
            }
            ?>

            <input type="hidden" name="i" value="<?php echo $i; ?>">
            <br><input type="submit" value="Enviar">
        </form>
        <p>Quedan <?php echo 8 - $i; ?> números por introducir.</p>

    <?php
    } else {
        echo '<p>Impares -> Rojos<br>Pares -> Azules</p>';

        $n = $_POST["n"];
        $numeros = $_POST["numeros"];
        $numeros[] = $n;

        foreach ($numeros as $n) {
            if ($n % 2 == 0) {
                echo '<span style="color: blue">' . $n . '</span>';
            } else {
                echo '<span style="color: red">' . $n . '</span>';
            }
            echo " ";
        }
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>