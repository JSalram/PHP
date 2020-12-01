<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <h1>Números primos</h1>

    <?php
    if (!isset($_POST["n"]) || $_POST["n"] == "") {
        $nums = [];
    } else {
        $n = $_POST["n"];

        if (isset($_POST["nums"])) {
            $nums = $_POST["nums"];
        }

        $nums[] = $n;
    }

    if (count($nums) < 10) {
    ?>

        <form action="8.php" method="POST">
            <label for="n">Número:</label><br>
            <input type="number" name="n" id="n" autofocus>
            <?php
            foreach ($nums as $n) {
                echo '<input type="hidden" name="nums[]" value="' . $n . '">';
            }
            ?>
            <input type="submit" value="Enviar">
        </form>

    <?php
    } else {
        echo '<table border="1">';

        echo '<tr><th colspan="10">Array inicial</th></tr>';
        echo '<tr>';
        foreach ($nums as $i => $n) {
            echo "<td>$i</td>";
        }
        echo "</tr><tr>";
        foreach ($nums as $n) {
            echo "<td>$n</td>";
        }
        echo '</table>';

        foreach ($nums as $k => $n) {
            $div = 0;
            for ($i = 1; $i <= $n; $i++) {
                if ($n % $i == 0) {
                    $div++;
                }
            }
            if ($div == 2) {
                $temp = $n;
                array_splice($nums, $k, 1);
                array_unshift($nums, $temp);
            }
        }

        echo "<br>";
        echo '<table border="1">';
        echo '<tr><th colspan="10">Array final</th></tr>';
        echo '<tr>';
        foreach ($nums as $i => $n) {
            echo "<td>$i</td>";
        }
        echo "</tr><tr>";
        foreach ($nums as $n) {
            echo "<td>$n</td>";
        }
        echo '</table>';
    }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>
    
</body>

</html>