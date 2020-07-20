<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <style>
        p {
            width: 30%;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        input[type="submit"] {
            width: 30%;
        }
    </style>
</head>
<body>
    <h1>Formularios en PHP</h1>

    <form action="suma.php">
        <p>
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="texto">
        </p>

        <p>
            <label for="num1">Número 1: </label>
            <input type="number" name="num1" id="num1">
        </p>

        <p>
            <label for="num2">Número 2: </label>
            <input type="number" name="num2" id="num2">
        </p>

        <input type="submit" name="Enviar">
    </form>

    <?php

        echo "<br>";

        if ($_GET["usuario"] != "")
        {
            echo "Usuario = " . $_GET["usuario"] . "<br>";
        }

        if (is_numeric($_GET["num1"]) && is_numeric($_GET["num2"]))
        {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];

            $suma = $num1 + $num2;

            echo "Suma (" . $num1 . "+" . $num2 . ")" . " = " . $suma;
        }

    ?>
</body>
</html>