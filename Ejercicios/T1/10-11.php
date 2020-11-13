<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 10-11</title>
</head>
<body>
    <h1>Conversor Mb - Kb</h1>

    <form action="10-11.php" method="POST">
        <fieldset style="display: inline-block;">
            <label for="n">Mb / Kb</label><br>
            <input type="number" name="n" id="n">
        </fieldset>
        <br><br>
        <input type="radio" name="mbkb" id="mb" value="mb" checked>
        <label for="mb">Mb a Kb</label>
        <br>
        <input type="radio" name="mbkb" id="kb" value="kb">
        <label for="kb">Kb a Mb</label>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $n = $_POST["n"];
        $mbkb = $_POST["mbkb"];

        if ($n != "")
        {
            if ($mbkb == "mb")
            {
                echo "<b>Conversión ==> </b>" . $n * 1024 . "Kb";
            }
            else
            {
                echo "<b>Conversión ==> </b>" . $n / 1024 . "Mb";
            }
        }

    ?>
    
    <p><a href="../index.html">Volver al índice</a></p>
</body>
</html>