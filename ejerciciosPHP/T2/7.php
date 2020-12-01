<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>7.- Calcula Media</h1>

    <form action="7.php" method="POST">
        <label for="n1">Nota 1:</label>
        <input type="number" name="n1" id="n1" min=0 max=10 step="any"><br>
        <label for="n2">Nota 2:</label>
        <input type="number" name="n2" id="n2" min=0 max=10 step="any"><br>
        <label for="n3">Nota 3:</label>
        <input type="number" name="n3" id="n3" min=0 max=10 step="any"><br>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        
        if ($n1 != "" && $n2 != "" && $n3 != "")
        {
            $media = ($n1 + $n2 + $n3) / 3;
            echo "<b>Media => </b>" . round($media, 2);
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>