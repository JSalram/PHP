<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
<h1>Números capicuas 1-99999</h1>

    <ul>
    <?php
    include "1-14.php";

    for ($i = 1; $i < 99999; $i++) {
        if (esCapicua($i)) {
            echo "<li>$i</li>";
        }
    }
    ?>
    </ul>

    <p><a href="../index.html">Volver al índice</a></p
</body>
</html>