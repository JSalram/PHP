<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares-nones</title>
    <link rel="stylesheet" href="examen.css">
</head>

<body>
    <h1>Pares o nones</h1>
    <?php
    $mano = [
        "img/0.svg",
        "img/1.svg",
        "img/2.svg",
        "img/3.svg",
        "img/4.svg",
        "img/5.svg"
    ];
    $m1 = rand(0, 5);
    $m2 = rand(0, 5);

    if (($m1 + $m2) % 2 == 0) {
        $w1 = "img/gana.svg";
        $w2 = "img/pierde.svg";
    } else {
        $w1 = "img/pierde.svg";
        $w2 = "img/gana.svg";
    }
    ?>

<div class="titulo">
    <h2>Jugador 1 (pares)</h2>
    <h2>Jugador 2 (nones)</h2>
</div>
    <div class="partida">
        <img src="<?php echo $w1 ?>">
        <img src="<?php echo $mano[$m1]; ?>">
        <img src="<?php echo $mano[$m2]; ?>">
        <img src="<?php echo $w2 ?>">
    </div>

    <form action="paresnones.php" method="POST">
        <input type="submit" value="Volver a jugar">
    </form>

    <footer>
        <p><cite>Javier Salado Ramos - 2º DAW</cite></p>
    </footer>

</body>

</html>