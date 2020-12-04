<?php

// 1 //
function generaArrayInt($tam, $min, $max)
{
    while ($tam > 0) {
        $r = rand($min, $max);
        $array[] = $r;
        $tam--;
    }
    return $array;
}

// 2 //
function minimoArrayInt($array)
{
    return min($array);
}

// 3 //
function maximoArrayInt($array)
{
    return max($array);
}

// 4 //
function mediaArrayInt($array)
{
    $media = array_sum($array) / count($array);
    return round($media, 2);
}

// 5 //
function estaEnArrayInt($array, $n)
{
    return in_array($n, $array);
}

// 6 //
function volteaArrayInt($array)
{
    return array_reverse($array);
}

// 7 //
function rotaDerechaArrayInt($array, $pos)
{
    $a = array_reverse(array_slice($array, count($array) - $pos));
    array_splice($array, count($array) - $pos);
    foreach ($a as $num) {
        array_unshift($array, $num);
    }
    return $array;
}

// 8 //
function rotaIzquierdaArrayInt($array, $pos)
{
    $a = array_slice($array, 0, $pos);
    array_splice($array, 0, $pos);
    foreach ($a as $num) {
        array_push($array, $num);
    }
    return $array;
}
