<?php

    $i = 0;

    echo "Bucle de 0 a 10: <br>";
    while ($i <= 10)
    {
        echo $i++;
        if ($i != 11)
        {
            echo ", ";
        }
        else
        {
            echo ".";
        }
    }

    echo "<br><br>";

    echo "Bucle de 10 a 0: <br>";
    do
    {
        echo --$i;
        if ($i > 0)
        {
            echo ", ";
        }
        else
        {
            echo ".";
        }
    }
    while ($i > 0);

?>