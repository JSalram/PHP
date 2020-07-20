<?php

    echo "Usuario = " . $_GET["usuario"] . "<br>";

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $suma = $num1 + $num2;

    echo "Suma (" . $num1 . "+" . $num2 . ")" . " = " . $suma;

    echo "<br><br><a href=\"index.html\"> Atrás </a>";
?>