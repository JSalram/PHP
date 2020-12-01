<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>4.- Calculadora sencilla</h1>
    
    <form action="4.php" method="POST" style="">
        <fieldset style="display: inline-block">
            <label for="n1">Número 1:</label>
            <input type="number" name="n1" id="n1"><br>
            <label for="n2">Número 2:</label>
            <input type="number" name="n2" id="n2">
        </fieldset><br>
        <input type="submit" value="Calcular">
    </form>

    <hr>

    <?php
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        
        if ($n1 != "" && $n2 != "")
        {
            echo "Suma ($n1 + $n2): " . ($n1+$n2) . "<br>";
            echo "Resta ($n1 - $n2): " . ($n1-$n2) . "<br>";
            echo "Multiplicación ($n1 x $n2): " . ($n1*$n2) . "<br>";
            echo "División ($n1 / $n2): " . ($n1/$n2);
        }
    ?>
    
    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>