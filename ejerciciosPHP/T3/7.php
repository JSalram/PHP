<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>7.- Caja fuerte</h1>

    <?php
        $nSecreto = 75286;

        if (isset($_POST["intentos"]))
        {
            $intentos = $_POST["intentos"];
            $n = $_POST["n"];
        }
        else
        {
            $intentos = 4;
            $n = 0;
        }

        if ($nSecreto != $n)
        {
            $intentos--;

            if ($intentos > 0)
            {
                echo '<p>Te quedan ' . $intentos . ' intentos para abrir la caja fuerte</p>';

                echo '<form action="7.php" method="POST">
                            <label for="n">Introduce un número</label>
                            <br><input type="number" name="n" id="n">
                            <input type="hidden" name="intentos" 
                            value="' . $intentos . '">
                            <br><input type="submit" value="Enviar">
                        </form>';
            }
            else
            {
                echo '<p>Ya no te quedan más intentos</p>';
            }
        }
        else
        {
            echo '<p style="text-align: center;">¡Enhorabuena! Has logrado abrir la caja fuerte</p>
            <img style="display: block; margin: auto;" src="https://m.gifmania.com/Gif-Animados-Objetos/Imagenes-Dinero/Cajas-Fuertes/Caja-Fuerte-Lingotes-Oro-81890.gif" alt="cajaFuerte">';
        }
        
        
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>