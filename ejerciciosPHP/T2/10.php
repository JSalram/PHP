<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>10.- Nota boletín</h1>

    <form action="10.php" method="POST">
        <label for="fecha">Fecha de nacimiento: </label>
        <br><input type="date" name="fecha" id="fecha">
        <br><input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        $fecha = $_POST["fecha"];
        $mes = substr($fecha, 5, 2);
        $dia = substr($fecha, 8, 2);

        if 
        ($mes == 12 && $dia >= 22 ||
        $mes == 1 && $dia <= 19) {
            echo "Signo: <b>Capricornio</b>";
        }
        elseif
        ($mes == 1 && $dia >= 21 ||
        $mes == 2 && $dia <= 19) {
            echo "Signo: <b>Acuario</b>";
        }
        elseif
        ($mes == 2 && $dia >= 20 ||
        $mes == 3 && $dia <= 20) {
            echo "Signo: <b>Piscis</b>";
        }
        elseif
        ($mes == 3 && $dia >= 21 ||
        $mes == 4 && $dia <= 20) {
            echo "Signo: <b>Aries</b>";
        }
        elseif
        ($mes == 4 && $dia >= 21 ||
        $mes == 5 && $dia <= 21) {
            echo "Signo: <b>Tauro</b>";
        }
        elseif
        ($mes == 5 && $dia >= 22 ||
        $mes == 6 && $dia <= 21) {
            echo "Signo: <b>Géminis</b>";
        }
        elseif
        ($mes == 6 && $dia >= 22 ||
        $mes == 7 && $dia <= 23) {
            echo "Signo: <b>Cáncer</b>";
        }
        elseif
        ($mes == 7 && $dia >= 24 ||
        $mes == 8 && $dia <= 23) {
            echo "Signo: <b>Leo</b>";
        }
        elseif
        ($mes == 8 && $dia >= 24 ||
        $mes == 9 && $dia <= 23) {
            echo "Signo: <b>Virgo</b>";
        }
        elseif
        ($mes == 9 && $dia >= 24 ||
        $mes == 10 && $dia <= 23) {
            echo "Signo: <b>Libra</b>";
        }
        elseif
        ($mes == 10 && $dia >= 24 ||
        $mes == 11 && $dia <= 22) {
            echo "Signo: <b>Escorpio</b>";
        }
        else {
            echo "Signo: <b>Sagitario</b>";
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>