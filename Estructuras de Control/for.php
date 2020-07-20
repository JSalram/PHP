<?php

    echo "Bucle for de 0 a 10: <br>";
    for ($i = 0; $i <= 10; $i++)
    {
        echo $i . "<br>";
    }

    echo "<br>";

    echo "Bucle for de 0 a 10 (2 en 2): <br>";
    for ($i = 0; $i <= 10; $i += 2)
    {
        echo $i . "<br>";
    }

    echo "<br>";

    echo "Bucle for de dos variables: <br>";
    for ($i = 0, $j = 0; $i < 10; $i++, $j += 2)
    {
        echo "i = " . $i;
        echo " ------ ";
        echo "j = " . $j;
        echo "<br>";
    }

?>