<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>
<body>
    <?php
      echo "<table border='1' style='text-align:center;'>";
      ?>
        <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            <th>08:30 <br> 09:30</th>
            <td rowspan="2">Cliente</td>
            <td rowspan="2">Empresa</td>
            <td rowspan="2">Servidor</td>
            <td>Despliegue</td>
            <td rowspan="2">Interfaces</td>
        </tr>
        <tr>
            <th>09:30 <br> 10:30</th>
            <td>Empresa</td>
        </tr>
        <tr>
            <th>10:30 <br> 11:00</th>
            <td colspan="5">RECREO</td>
        </tr>
        <tr>
            <th>11:00 <br> 12:00</th>
            <td rowspan="2">Interfaces</td>
            <td rowspan="2">Despliegue</td>
            <td rowspan="2">Interfaces</td>
            <td>Empresa</td>
            <td rowspan="2">Servidor</td>
        </tr>
        <tr>
            <th>12:00 <br> 13:00</th>
            <td rowspan="3">Servidor</td>
        </tr>
        <tr>
            <th>13:00 <br> 14:00</th>
            <td rowspan="2">Servidor</td>
            <td rowspan="2">Servidor</td>
            <td rowspan="2">Cliente</td>
            <td rowspan="2">Cliente</td>
        </tr>
        <tr>
            <th>14:00 <br> 15:00</th>
        </tr>
    <?php
      echo "</table>";
    ?>
</body>
</html>