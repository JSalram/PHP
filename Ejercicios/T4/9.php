<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <h1>Rota Array v2</h1>

    <?php
    if (!isset($_POST["n"])) {
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

        <form action="9.php" method="POST">
            <label for="n">Número <?php echo (count($nums)+1) ?> :</label><br>
            <input type="number" name="n" autofocus>
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

        array_unshift($nums, $nums[count($nums)-1]);
        array_splice($nums, count($nums)-1);

        echo '<br>';
        echo '<table border="1">';
        echo '<tr><th colspan="10">Array rotado</th></tr>';
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