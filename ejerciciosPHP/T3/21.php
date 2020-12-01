<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>

<body>
    <?php
    if (!isset($_POST["n"])) {
        $n = 0;
        $numeros = 0;
        $impares = 0;
        $mediaImpares = 0;
        $mayorPar = 0;
    } else {
        $n = $_POST["n"];
        $numeros = $_POST["numeros"];
        $impares = $_POST["impares"];
        $mediaImpares = $_POST["mediaImpares"];
        $mayorPar = $_POST["mayorPar"];
    }

    if ($n > 0) {
        $numeros++;

        if ($n % 2 != 0) {
            $impares++;
            $mediaImpares = ($mediaImpares + $n) / $impares;
        } else if ($n > $mayorPar) {
            $mayorPar = $n;
        }
    }
    ?>

    <h1>Calcula números</h1>
    <h2>Introduce números (&lt;0 para terminar)</h2>
    <form action="21.php" method="POST">
        <label for="n">Número: </label>
        <input type="number" name="n" id="n" autofocus>
        <input type="hidden" name="numeros" value="<?php echo $numeros ?>">
        <input type="hidden" name="impares" value="<?php echo $impares ?>">
        <input type="hidden" name="mediaImpares" value="<?php echo $mediaImpares ?>">
        <input type="hidden" name="mayorPar" value="<?php echo $mayorPar ?>">
        <br><input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
    if ($n < 0) {
        echo "Números introducidos => $numeros <br>";
        echo "Media números impares => $mediaImpares <br>";
        echo "Número par mayor => $mayorPar";
    }
    ?>
    <p><a href="../index.html">Volver al índice</a></p>
</body>

</html>