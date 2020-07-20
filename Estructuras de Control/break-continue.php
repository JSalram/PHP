<?php

    echo "Bucle for de 0 a 10 con break en 5: <br>";
    for ($i = 0; $i < 10; $i++)
    {
        if ($i == 5)
        {
            break;
        }

        echo $i . "<br>";
    }
    echo "FIN";

    echo "<br><br>";

    echo "Bucle for de 0 a 10 con continue en 5: <br>";
    for ($i = 0; $i < 10; $i++)
    {
        if ($i == 5)
        {
            continue;
        }

        echo $i . "<br>";
    }
    echo "FIN";

?>