<?php

    $arr = array(1, 2, 3, 4);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $i = 0;

    foreach ($arr as $valor)
    {
        echo "Valor " . $i++ . " ==> " . $valor . "<br>";
    }
    echo "<br>";

    // Con Arrays Asociativos

    $arr = array(
        2 => "dos",
        3 => "tres",
        4 => "cuatro",
        5 => "cinco"
    );

    foreach ($arr as $key => $valor)
    {
        echo "Valor " . $key . " ==> " . $arr[$key] . "<br>";
        // $arr[$key] y $value funcionan igual
    }

?>