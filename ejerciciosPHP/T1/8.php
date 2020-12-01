<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>8.- Salario semanal</h1>
    
    <form action="8.php" method="POST">
        <label for="horas">Horas semanales: </label><br>
        <input type="number" name="horas" id="horas" autofocus>
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $horas = $_POST["horas"];
        $salario = $horas * 12;

        if ($horas != "")
        {
            echo "<b>Salario semanal ==> </b>" . $salario;
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>