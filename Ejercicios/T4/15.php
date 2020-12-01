<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
    <style>
        * {
            box-sizing: border-box;
        }

        #nums {
            display: grid;
            width: 80%;
            line-height: 0;
            margin: 10px auto;
            text-align: center;
            padding: 10px;
            grid-template-columns: repeat(12, 1fr);
            border: 2px solid black;
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Rota Array v3</h1>

    <?php
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {
            $nums[$i][$j] = rand(0, 100);
        }
    }


    if (!isset($_POST["nums"])) {
        echo '<div id="nums">';
        foreach ($nums as $a) {
            foreach ($a as $n) {
                echo "<p>$n</p>";
            }
        }
    ?>
        </div>

        <form action="15.php" method="POST">
            <?php
            foreach ($nums as $i => $a) {
                foreach ($a as $n) {
                    echo "<input type='hidden' name='nums[$i][]' value='$n'>";
                }
            }
            ?>
            <input type="submit" value="Rotar Array">
        </form>
    <?php
    } else {
        $nums = $_POST["nums"];

        echo '<div id="nums" style="width: 49%; float: left">';
        foreach ($nums as $a) {
            foreach ($a as $n) {
                echo "<p>$n</p>";
            }
        }
        echo '</div>';

        for ($n = 0; $n < 6; $n++) {
            $start = $nums[$n][11-$n];
            for ($i = 11-$n; $i > $n; $i--) {
                $nums[$n][$i] = $nums[$n][$i - 1];
            }
            for ($i = $n; $i < 11-$n; $i++) {
                $nums[$i][$n] = $nums[$i + 1][$n];
            }
            for ($i = $n; $i < 11-$n; $i++) {
                $nums[11-$n][$i] = $nums[11-$n][$i + 1];
            }
            for ($i = 11-$n; $i > $n+1; $i--) {
                $nums[$i][11-$n] = $nums[$i - 1][11-$n];
            }
            $nums[$i][11-$n] = $start;
        }

        echo '<div id="nums" style="background: lightgreen; width: 49%; float: right;">';
        foreach ($nums as $a) {
            foreach ($a as $n) {
                echo "<p>$n</p>";
            }
        }
        echo '</div>';
    }
    ?>

</body>

</html>