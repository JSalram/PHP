<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Diccionario Español-Inglés</h1>

    <form action="11.php" method="POST">
        <label for="p">Palabra:</label><br>
        <input type="text" id="p" name="p" autofocus>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $trad = array(
        "hola" => "hello",
        "adios" => "bye",
        "rojo" => "red",
        "azul" => "blue"
    );

    if (isset($_POST["p"])) {
        $p = strtolower($_POST["p"]);

        if (array_key_exists($p, $trad)) {
            echo "<p>" . ucfirst($p) . " => " . ucfirst($trad[$p]) . "</p>";
        } else {
            echo "<p>La palabra buscada no se encuentra entre nuestras opciones.</p>";
        }
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
    
</body>
</html>