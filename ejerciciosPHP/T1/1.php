<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>1.- Multiplicador</h1>
    <form action="1.php" method="POST">
        <label for="n1">Número 1:</label>
        <input type="number" name="n1" id="n1">
        <br>
        <label for="n2">Número 2:</label>
        <input type="number" name="n2" id="n2">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <br>

    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        
        if ($n1 != "" && $n2 != "")
        {
            echo "<b>Multiplicación --></b> $n1 x $n2 = " . ($n1*$n2);
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>