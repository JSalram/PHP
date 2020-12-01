<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Rota Array</h1>

    <form action="3.php" method="POST">
        <label for="n">Número</label><br>
        <input type="number" name="n" id="n" autofocus>
        <?php
        if (isset($_POST["n"])) {
            $n = $_POST["n"];
            $i = $_POST["i"];

            if ($i == 0) {
                $numeros[] = $n;
            } else if ($i < 15) {
                $numeros = $_POST["numeros"];
                $numeros[] = $n;
            } else {
                $numeros = $_POST["numeros"];
            }

            foreach ($numeros as $n) {
                echo '<input type="hidden" name="numeros[]" value="' . $n . '">';
            }

            $i++;
        } else {
            $i = 0;
        }
        ?>
        <input type="hidden" name="i" value="<?php echo $i; ?>">
        <br><input type="submit" value="Enviar">
    </form>

    <?php
    if ($i >= 15) {
        echo '<h3>Array original:</h3>';

        foreach ($numeros as $k => $n) {
            echo "[$k]: $n";
            if ($k < count($numeros) - 1) {
                echo " --- ";
            }
        }

        echo '<h3>Array rotado:</h3>';
        $temp = $numeros[count($numeros) - 1];
        array_pop($numeros);
        array_unshift($numeros, $temp);

        foreach ($numeros as $k => $n) {
            echo "[$k]: $n";
            if ($k < count($numeros) - 1) {
                echo " --- ";
            }
        }
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>