<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>

<body>
    <h1>Pirámide</h1>
    <form action="24.php" method="POST">
        <label for="h">Altura:</label><br>
        <input type="number" name="h" id="h">
        <br><input type="submit" value="Enviar">
    </form>

    <hr>

    <?php

    if (isset($_POST["h"])) {
        $h = $_POST["h"];

        echo "<pre>";
        for ($i = 1; $i <= $h; $i++) {
            $esp = $h - $i;

            for ($j = 0; $j < $esp; $j++) {
                echo "&nbsp;";
            }

            for ($k = 1; $k < $i; $k++) {
                echo $k;
            }

            for ($k = $i; $k > 0; $k--) {
                echo $k;
            }
            echo "<br>";
        }
        echo "</pre>";
    }
    ?>
    <p><a href="../index.html">Volver al índice</a></p>
</body>

</html>