<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <h1>Pares - Impares</h1>

    <h4>Array Original</h4>
    <?php
    echo "[";
    for ($i = 0; $i < 20; $i++) {
        $nums[] = rand(0, 100);
        echo $nums[$i];
        if ($i < 19) {
            echo ", ";
        }
    }
    echo "]";
    ?>

    <h4>Arry ordenado (pares->impares)</h4>
    <?php
    foreach ($nums as $n) {
        if ($n % 2 == 0) {
            $pares[] = '<span style="color: blue">' . $n . '</span>';
        } else {
            $impares[] = '<span style="color: red">' . $n . '</span>';
        }
    }

    $numeros = array_merge($pares, $impares);

    echo "[";
    foreach ($numeros as $n) {
        echo "$n, ";
    }
    echo "]";

    ?>
</body>

</html>