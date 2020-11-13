<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Volumen de un cono</h1>

    <form action="9.php" method="POST">
        <fieldset style="display: inline-block">
            <label for="r">Radio: </label><br>
            <input type="number" name="r" id="r"><br>
            <label for="h">Altura: </label><br>
            <input type="number" name="h" id="h"><br>
            <input type="submit" value="Calcular">
        </fieldset>
    </form>

    <hr>

    <?php
        $r = $_POST["r"];
        $h = $_POST["h"];
        $volumen = (pi() * pow($r, 2) * $h) / 3;

        if ($r != "" && $h != "")
        {
            echo "<b>Volumen ==> </b>" . round($volumen, 3) . "cm³";
        }
    ?>
    
    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>