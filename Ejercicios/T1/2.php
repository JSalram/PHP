<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>2.- Euros a pesetas</h1>
    <form action="2.php" mehod="POST">
        <label for="eur">Euros:</label> <br>
        <input type="number" name="eur" id="eur">
        <input type="submit" value="Convertir">
    </form>

    <br>

    <?php
        $eur = $_POST["eur"];
        if ($eur != "")
        {
            echo "<b>Pesetas --></b> " . $eur*166.3860;
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>