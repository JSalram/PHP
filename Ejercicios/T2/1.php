<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>1.- Asignatura 1ª Hora</h1>

    <form action="1.php" method="POST">
        <label for="dia">Día de la semana</label><br>
        <input type="text" name="dia" id="dia"><br>
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $dia = $_POST["dia"];
        $dias = ["lunes", "martes", "miercoles", "jueves", "viernes"];
        $asignaturas = ["DWEC", "EIE", "DWES", "DAW", "DIW"];

        if ($dia != "")
        {
            $dia = strtolower($dia);
            $dia = str_replace("é", "e", $dia);

            if (in_array($dia, $dias))
            {
                $index = array_search($dia, $dias);
                echo "<b>Primera hora => </b>" . $asignaturas[$index];
            }
            else
            {
                echo "Día no válido.";
            }
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
    
</body>
</html>