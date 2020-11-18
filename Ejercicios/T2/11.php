<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>11.- Segundos hasta la medianoche</h1>

    <form action="11.php" method="POST">
        <label for="hora">Hora: </label><br>
        <input type="time" name="hora" id="hora">
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $hora = $_POST["hora"];

        if ($hora != "")
        {
            $s = substr($hora, 0, 2) * 3600 +
                    substr($hora, 3, 2) * 60;

            if ($s <= 43200)
            {
                $dif = 43200 - $s;
                echo "Quedan $dif segundos hasta las 12 del mediodía";
            }
            else
            {
                $dif = 86400 - $s;
                echo "Quedan $dif segundos hasta las 12 de la medianoche";
            }
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>