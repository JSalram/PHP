<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra Cartas</title>
    <link rel="stylesheet" href="examen.css">
</head>

<body>
    <h1>Muestra Cartas (FORMULARIO)</h1>

    <p>Elija un número de cartas y un palo.</p>
    <form action="resultado.php" method="POST">
        <label for="n"><b>Número de cartas: </b></label>
        <input type="number" name="n" id="n" min="3" max="12" autofocus>
        <select name="palo">
            <option value="c">Corazones</option>
            <option value="d">Diamantes</option>
            <option value="p">Picas</option>
            <option value="t">Tréboles</option>
        </select>
        <br><br>
        <input type="submit" value="Contar">
        <input type="reset" value="Borrar">
    </form>


    <footer>
        <p><cite>Javier Salado Ramos - 2º DAW</cite></p>
    </footer>
</body>

</html>