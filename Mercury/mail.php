<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Correo</title>
    <style>
        body {
            min-height: 100%;
            text-align: center;
        }
        * {
            box-sizing: border-box;
        }
        h1 {
            font-size: 50px;
            text-shadow: 3px 3px 5px gray;
        }
        form {
            display: inline-block;
            border: 1px solid rgba(180, 180, 180);
            padding: 30px;
            border-radius: 20px;
            background: lightgray;
            font-size: 20px;
            font-weight: bold;
        }
        textarea {
            resize: none;
            font-family: Arial;
            font-size: 16px;
            padding: 10px;
        }
        p.exito {
            border: 1px solid green;
            background: greenyellow;
            text-align: center;
            padding: 5px;
        }
        input[type="submit"] {
            font-size: 20px;
            background: gray;
            color: white;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Correo Mercury</h1>

    <?php if (!isset($_POST["to"]) || !isset($_POST["asunto"]) || !isset($_POST["msj"])) { ?>

        <form action="mail.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="to">Para: </label>
                    </td>
                    <td>
                        <input type="email" name="to" id="to" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="asunto">Asunto: </label>
                    </td>
                    <td>
                        <input type="text" name="asunto" id="asunto" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <label for="msj">Mensaje: </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="msj" id="msj" cols="30" rows="8"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>

    <?php } else {
        $to = $_POST["to"];
        $asunto = $_POST["asunto"];
        $msj = $_POST["msj"];
        $msj = wordwrap($msj, 70, "\r\n");

        $success = mail($to, $asunto, $msj);
        if ($success) {
            echo "<p class='exito'>Mensaje enviado con éxito</p>";
        } else {
            $errorMessage = error_get_last()['message'];
        }

        echo "<p><a href='mail.php'>Volver al inicio</a></p>";
    }
    ?>
</body>

</html>