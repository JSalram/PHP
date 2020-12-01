<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>2.- Saludo</h1>

    <form action="2.php" method="POST">
        <label for="hora">Hora: </label><br>
        <input type="time" name="hora" id="hora"><br>
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $hora = $_POST["hora"];

        if (isset($hora))
        {
            if ($hora >= "06:00" && $hora < "13:00")
            {
                echo "Buenos días";
            }
            elseif ($hora >= "13:00" && $hora < "21:00")
            {
                echo "Buenas tardes";
            }
            else
            {
                echo "Buenas noches";
            }
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>