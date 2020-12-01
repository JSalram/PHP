<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test SQL</title>
</head>

<body>
    <h1 style="text-align: center; text-decoration: underline;">TEST SQL</h1>
    <h3> - Sacar de una base de datos los usuarios y contraseñas almacenados en ella:</h4>

        <form action="test.php" method="POST">
            <label>
                Usuario: <br>
                <input type="text" name="user" id="user">
            </label>
            <br>
            <label>
                Contraseña: <br>
                <input type="password" name="passwd" id="passwd">
            </label>
            <br>
            <input type="submit" value="Enviar">
        </form>

        <?php
        if (isset($_POST["user"]) && isset($_POST["passwd"])) {
            $user = $_POST["user"];
            $passwd = $_POST["passwd"];

            $conn = new mysqli("localhost", "root", "", "test");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully <br>";

            $sql = "SELECT username, passwd FROM user WHERE username='$user' AND passwd='$passwd'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "Username: " . $row["username"] . ", Password: " . $row["passwd"] . "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        }
        ?>
</body>

</html>