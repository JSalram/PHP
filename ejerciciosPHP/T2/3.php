<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>3.- Día de la semana</h1>

    <form action="3.php" method="POST">
        <label for="dia">Día de la semana:</label><br>
        <input type="number" name="dia" id="dia" min=1 max=7><br>
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $dia = $_POST["dia"] - 1;
        $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

        if ($dia >= 0 && $dia <= 7)
        {
            echo "<b>Día de la semana => </b>" . $dias[$dia];
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>