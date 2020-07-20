<?php

# Variables
$nombre = "Javi";
$edad = 22;

echo "Hola " . $nombre . nl2br("\r\n");
echo "Edad: " . $edad;

echo nl2br("\n\n");

# Constantes
    # Constante simple
    define("MI_CONSTANTE", "HOLA");

    # Constante array
    define("MI_ARRAY", array("2", "3"));

    $_miconstante = MI_CONSTANTE;

    echo MI_CONSTANTE . nl2br("\n");
    echo $_miconstante . nl2br("\n");
    print_r(MI_ARRAY[0]) . nl2br("\n");