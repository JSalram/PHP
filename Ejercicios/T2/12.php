<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>12.- Minicuestionario</h1>

    <form action="12.php" method="POST">
        <ol>
            <li>
              ¿Cuál de los siguientes tipos de datos de Java tiene más precisión?<br>
              <input type="radio" name="r1" value="0">a) int<br>
              <input type="radio" name="r1" value="1">b) double<br>
              <input type="radio" name="r1" value="2">c) float<br>
            </li>

            <li>
              ¿Cuál es el lenguaje que se utiliza para hacer consultas en las bases de datos?<br>
              <input type="radio" name="r2" value="0">a) XML<br>
              <input type="radio" name="r2" value="1">b) SELECT<br>
              <input type="radio" name="r2" value="2">c) SQL<br>
            </li>

            <li>
              Para insertar un hiperenlace en una página se utiliza la etiqueta...<br>
              <input type="radio" name="r3" value="0">a) href<br>
              <input type="radio" name="r3" value="1">b) a<br>
              <input type="radio" name="r3" value="2">c) link<br>
            </li>

            <li>
                ¿En qué directorio se encuentran los archivos de configuración de Linux?<br>
                <input type="radio" name="r4" value="0">a) /etc<br>
                <input type="radio" name="r4" value="1">b) /config<br>
                <input type="radio" name="r4" value="2">c) /cfg<br>
            </li>

            <li>
                ¿Cuál de las siguientes memorias es volátil?<br>
                <input type="radio" name="r5" value="0">a) RAM<br>
                <input type="radio" name="r5" value="1">b) EPROM<br>
                <input type="radio" name="r5" value="2">c) ROM<br>
            </li>
          </ol>
          <input type="submit" value="Enviar">
    </form>

    <hr>

    <?php
        $respuestas = [1, 2, 1, 0, 0];
        
        foreach ($respuestas as $i => $sol)
        {
            $i += 1;
            $r = $_POST["r".$i];
            $val = ["Incorrecta", "Correcta"];
            echo "Pregunta $i: " . $val[$r == $sol] . "<br>";
        }
    ?>

    <p><a href="../index.html">Volver al índice</a></p>

</body>
</html>