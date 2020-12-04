<?php

// 1 //
function generaArrayBiInt($n, $m, $min, $max)
{
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $array[$i][] = rand($min, $max);
        }
    }
    return $array;
}

// 2 //
function filaDeArrayBiInt($array, $fila)
{
    return $array[$fila];
}

// 3 //
function columnaDeArrayBiInt($array, $col)
{
    foreach ($array as $a) {
        $columna[] = $a[$col];
    }
    return $columna;
}

// 4 //
function coordenadasEnArrayBiInt($array, $col, $fila)
{
    return $array[$fila][$col];
}

// 5 //
function esPuntoDeSilla($array, $col, $fila)
{
    $n = coordenadasEnArrayBiInt($array, $col, $fila);
    if (
        min(filaDeArrayBiInt($array, $fila)) == $n &&
        max(columnaDeArrayBiInt($array, $col)) == $n
    ) {
        return true;
    } else {
        return false;
    }
}

// 6 //
function diagonal($array, $col, $fila, $direccion = "nose")
{
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($fila == $i && $col == $j) {
                $nose[] = $array[$i][$j];
                $neso[] = $array[$i][$j];
            } elseif ($fila - $i == $col - $j) {
                $nose[] = $array[$i][$j];
            } elseif (abs($fila - $i) == abs($col - $j)) {
                $neso[] = $array[$i][$j];
            }
        }
    }

    if ($direccion == "nose") {
        return $nose;
    } elseif ($direccion == "neso") {
        return $neso;
    } else {
        return false;
    }
}

$array = generaArrayBiInt(5, 5, 1, 9);
foreach ($array as $i => $a) {
    foreach ($a as $n) {
        echo " $n ";
    }
    echo "<br>";
}
echo "<br>";
$diag = diagonal($array, 2, 3, "neso");
foreach ($diag as $d) {
    echo " $d ";
}
