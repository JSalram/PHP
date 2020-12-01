<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>6.- Área Triángulo</h1>

    <form action="6.php" method="POST">
        <fieldset style="display: inline-block">
            <label for="base">Base:</label><br>
            <input type="number" name="base" id="base"><br>
            <label for="altura">Altura:</label><br>
            <input type="number" name="altura" id="altura">
        </fieldset><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $area = ($base*$altura)/2;

        if ($altura != "" && $base != "")
        {
            echo "<b>Área triángulo ==></b> " . $area . "m²";
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>