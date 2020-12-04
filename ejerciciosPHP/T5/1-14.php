<?php

// 1 //
function esCapicua ($n) {
    return $n == strrev((string)$n);
}

// 2 //
function esPrimo ($n) {
    $div = 0;
    for ($i = 1; $i < $n/2; $i++) {
        if ($n % $i == 0) {
            $div++;
        }
    }
    return $div == 1 || $n == 2;
}

// 3 //
function siguientePrimo ($n) {
    while (!esPrimo(++$n)) {}
    return $n;
}

// 4 //
function potencia ($n, $exp) {
    $num = $n;
    if ($exp == 0) {
        $num = 1;
    }
    while ($exp > 1) {
        $num *= $n;
        $exp--;
    }
    return $num;
}

// 5 //
function digitos ($n) {
    $dec = 1;
    while ($n > 9) {
        $n /= 10;
        $dec++;
    }
    return $dec;
    // return strlen((string)$n); 
}

// 6 //
function voltea ($n) {
    return (int)(strrev((string)$n));
}

// 7 //
function digitoN ($n, $pos) {
    return (int)(((string)$n)[$pos]);
}

// 8 //
function posicionDeDigito ($n, $dig) {
    $pos = strpos((string)$n, (string)$dig);
    if ($pos) {
        return $pos;
    } else {
        return -1;
    }
    
}

// 9 //
function quitaPorDetras ($n, $dig) {
    $n = (string)$n;
    return (int)(substr($n, 0, strlen($n)-$dig));
}

// 10 //
function quitaPorDelante ($n, $dig) {
    $n = (string)$n;
    return (int)(substr($n, $dig, strlen($n)));
}

// 11 //
function pegaPorDetras ($n, $dig) {
    return (int)($n . $dig);
}

// 12 //
function pegaPorDelante ($n, $dig) {
    return (int)($dig . $n);
}

// 13 //
function trozoDeNumero ($n, $ini, $fin) {
    return (int)(substr((string)$n, $ini, $fin));
}

// 14 //
function juntaNumeros ($n1, $n2) {
    return (int)($n1 . $n2);
}
?>