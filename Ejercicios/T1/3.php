<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>3.- Pesetas a euros</h1>
    <form action="3.php" mehod="POST">
        <label for="pes">Pesetas:</label> <br>
        <input type="number" name="pes" id="pes">
        <input type="submit" value="Convertir">
    </form>

    <br>

    <?php
        $pes = $_POST["pes"];
        if ($pes != "")
        {
            echo "<b>Euros --></b> " . $pes*0.0060;
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>