<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <h1>Máximo-mínimo</h1>

    <?php
    if (!isset($_POST["n"])) {
        $cont = 0;
    } else {
        $n = $_POST["n"];
        $cont = $_POST["cont"];

        for ($i = 0; $i < $cont; $i++) {
            $numeros[] = $_POST["numero$i"];
        }

        if ($cont < 10) {
            $numeros[] = $n;
            print_r($numeros);
            $cont++;
        } else {
            $min = min($numeros);
            $max = max($numeros);

            foreach ($numeros as $i => $n) {
                echo "Número " . ($i + 1) . ": $n";
                echo "<br>";
            }
        }
    }
    ?>

    <form action="2.php" method="POST">
        <label for="n">Número <?php echo ($cont + 1); ?>: </label>
        <input type="number" name="n" id="n" autofocus>
        <input type="hidden" name="cont" value="<?php echo $cont; ?>">
        <?php
        for ($i = 0; $i < $cont; $i++) {
            echo '<input type="hidden" name="numero' . $i . '" value="' . $numeros[$i] . '">';
        } ?>
        <br><input type="submit" value="Enviar">
    </form>

    <p><a href="../index.html">Volver al índice</a></p>
</body>

</html>