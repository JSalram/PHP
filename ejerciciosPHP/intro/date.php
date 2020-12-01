<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Date</title>
</head>
<body>
    <h1>Ejercicio fecha</h1>
    <h2>Fecha actual:</h2>
    <?php
        date_default_timezone_set('Europe/Madrid');
        $n_mes = date("m");
        $n_sem = date("N");

        switch ($n_sem)
        {
            case 1:
                $dia_sem = "Lunes";
            break;
            case 2:
                $dia_sem = "Martes";
            break;
            case 3:
                $dia_sem = "Miércoles";
            break;
            case 4:
                $dia_sem = "Jueves";
            break;
            case 5:
                $dia_sem = "Viernes";
            break;
            case 6:
                $dia_sem = "Sábado";
            break;
            case 7:
                $dia_sem = "Domingo";
            break;
        }

        switch ($n_mes)
        {
            case 1:
                $mes = "Enero";
            break;
            case 2:
                $mes = "Febrero";
            break;
            case 3:
                $mes = "Marzo";
            break;
            case 4:
                $mes = "Abril";
            break;
            case 5:
                $mes = "Mayo";
            break;
            case 6:
                $mes = "Junio";
            break;
            case 7:
                $mes = "Julio";
            break;
            case 8:
                $mes = "Agosto";
            break;
            case 9:
                $mes = "Septiembre";
            break;
            case 10:
                $mes = "Octubre";
            break;
            case 11:
                $mes = "Noviembre";
            break;
            case 12:
                $mes = "Diciembre";
            break;
        }
        echo "<p><b>";
        echo $dia_sem . " " . date("n") . " de " . $mes . " de " . date("Y");
        echo "</b></p>";
    ?>
</body>
</html>