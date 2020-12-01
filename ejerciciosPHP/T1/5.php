<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>5.- Área Rectángulo</h1>

    <form action="5.php" method="POST">
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

        if ($altura != "" && $base != "")
        {
            echo "<b>Área rectángulo ==></b> " . ($base*$altura) . "m²";
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>