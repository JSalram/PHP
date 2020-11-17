<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>4.- Salario semanal</h1>
    
    <form action="4.php" method="POST">
        <label for="horas">Horas semanales: </label><br>
        <input type="number" name="horas" id="horas" autofocus>
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $horas = $_POST["horas"];
        
        if ($horas > 40)
        {
            $salario = (40*12) + ($horas-40)*16;
        }
        else
        {
            $salario = $horas * 12;
        }

        if ($horas != "")
        {
            echo "<b>Salario semanal ==> </b>" . $salario;
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>