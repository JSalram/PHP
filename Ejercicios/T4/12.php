<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <h1>Test Inglés</h1>
    <?php
    $trad = array(
        "hola" => "hello",
        "adios" => "bye",
        "rojo" => "red",
        "azul" => "blue",
        "verde" => "green",
        "cama" => "bed",
        "mesa" => "table",
        "teclado" => "keyboard"
    );

    $palabras = array_rand($trad, 5);
    if (!isset($_POST["palabras"])) {
    ?>

    <form action="12.php" method="POST">
        <?php
        foreach ($palabras as $pal) {
            echo "<label for='$pal'>$pal: </label><br>";
            echo "<input type='text' name='$pal' id='$pal'>";
            echo "<input type='hidden' name='palabras[]' value='$pal'>";
            echo "<br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
    <?php
    } else {
        $palabras = $_POST["palabras"];
        foreach ($palabras as $i => $pal) {
            $resp = $_POST[$pal];
            if ($resp == $trad[$pal]) {
                echo "Pregunta ".($i+1).". <span style='color: green'>Correcta</span>";
            } else {
                echo "Pregunta ".($i+1).". <span style='color: red'>Incorrecta</span> (Corrección: ".$trad[$pal].")";
            }
            echo "<br>";
        }
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>

</html>