<?php

$a = $b = $c = "Hola Mundo!";

$n = 5;

echo $n . nl2br("\n");
echo "Postincremento --> " . $n++ . nl2br("\n");
echo $n . nl2br("\n");
echo "Preincremento --> " . ++$n . nl2br("\n");

echo nl2br("\n\n");


$p1 = "Javier";
$p1 .= "Salado";

$p2 = "Juan";
$p2_2 = $p2 . "López";

echo $p1 . nl2br("\n");
echo $p2_2;