<?php

    $array1 = array("1", "2", "3", "4");
    $array2 = array("uno", "dos", "tres", $array1);

    echo $array2[0] . "<br>";

    echo "<pre>";
    print_r($array2);
    echo "</pre>" . "<br>";


    // Arrays asociativos

    $arr_ass = array(
        "1" => "valor1",
        "2" => "valor2",
        "3" => "valor3"
    );
    echo $arr_ass[2] . "<br>" . "<pre>";
    print_r($arr_ass);
    echo "</pre>";

    // $var1 = 2;
    // if (is_array($var1))
    // {
    //     echo "Es un array";
    // }
    // else
    // {
    //     echo "No es un array";
    // }
?>