<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>14.- Par y múltiplo de 5</h1>

    <form action="14.php" method="POST">
        <label for="n">Número: </label>
        <input type="number" name="n" id="n">
        <br><input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $n = $_POST["n"];
        
        if ($n != "")
        {
            if ($n % 2 == 0)
            {
                if ($n % 5 == 0)
                {
                    echo "El número introducido ($n) es par y múltiplo de 5";
                }
                else
                {
                    echo "El número introducido ($n) es par, pero no es múltiplo de 5";
                }
            }
            else
            {
                if ($n % 5 == 0)
                {
                    echo "El número introducido ($n) no es par, pero sí múltiplo de 5";
                }
                else
                {
                    echo "El número introducido ($n) no es par ni múltiplo de 5";
                };
            }
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>