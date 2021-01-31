<!DOCTYPE html>
<html lang="es">

<head>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.php">DAnime</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="./usuarios.php">Usuarios</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./series.php">Series</a>
            </li>
    </nav>

    <div class="container my-4">

        <!-- AÑADIR ANIME A LA BASE DE DATOS -->
        <?php
        if (isset($_POST["nombre"]) && isset($_POST["clave"])) {
            $nombre = $_POST["nombre"];
            $clave = $_POST["clave"];

            if ($nombre != "" && $clave != "") {
                $conn = new mysqli("localhost", "root", "", "test");
                $sql = "INSERT INTO danime VALUES('$nombre', '$clave')";

                if ($conn->query($sql) === TRUE) {
                    header("Location: series.php");
                } else {
                    echo "<p class='btn bg-danger text-light w-100'>ERROR: ANIME YA EXISTENTE</p>";
                }

                $conn->close();
            }
            unset($_POST);
        }
        ?>

        <?php
        if (isset($_POST["nombre_n"]) && isset($_POST["clave_n"])) {
            $nombre_v = $_POST["nombre_v"];
            $nombre_n = $_POST["nombre_n"];
            $clave_n = $_POST["clave_n"];

            $conn = new mysqli("localhost", "root", "", "test");
            $sql = "UPDATE danime SET nombre = '$nombre_n', clave='$clave_n' WHERE nombre='$nombre_v'";

            if ($conn->query($sql) === TRUE) {
                header("Location: series.php");
            } else {
                echo "<p class='btn bg-danger text-light w-100'>ERROR AL ACTUALIZAR UN ANIME</p>";
            }
            $conn->close();
        }
        ?>

        <!-- ELIMINAR ANIME DE LA BASE DE DATOS -->
        <?php
        if (isset($_POST["del"])) {
            $nombre = $_POST["del"];

            $conn = new mysqli("localhost", "root", "", "test");
            $sql = "DELETE FROM danime WHERE nombre = '$nombre'";

            if ($conn->query($sql) === TRUE) {
                header("Location: series.php");
            } else {
                echo "<p class='btn bg-danger text-light w-100'>ERROR AL ELIMINAR UN ANIME</p>";
            }
            $conn->close();
        }
        ?>

        <!-- REPRESENTAR ANIMES DE LA BASE DE DATOS -->
        <h2>Animes</h2>
        <ul class="list-group">

            <?php
            $conn = new mysqli("localhost", "root", "", "test");
            $sql = "SELECT nombre, clave FROM danime";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <li class="list-group-item d-flex justify-content-between">
                    <div class="my-auto">' . $row["nombre"] . ' : ' . $row["clave"] . '</div>
                    <div>
                        <form action="series.php" method="POST" class="d-inline-block">
                            <input type="hidden" name="update[]" value="' . $row["nombre"] . '">
                            <input type="hidden" name="update[]" value="' . $row["clave"] . '">
                            <input class="btn btn-info" type="submit" value="Editar">
                        </form>
                        <form action="series.php" method="POST" class="d-inline-block">
                            <input type="hidden" name="del" value="' . $row["nombre"] . '">
                            <input class="btn btn-danger" type="submit" value="X">
                        </form>
                    </div>
                    </li>';
                }
            }
            $conn->close();
            ?>
        </ul>
    </div>

    <div class="container my-4">
        <!-- AÑADIR NUEVO ANIME -->
        <?php if (!isset($_POST["update"])) : ?>
            <h4>Añadir nuevo anime</h4>
            <form action="series.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre del anime</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre..." autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="clave">Clave del anime</label>
                    <input type="text" class="form-control" name="clave" id="clave" placeholder="Clave..." autocomplete="off">
                </div>
                <button type="submit" class="btn btn-success">Añadir</button>
            </form>

        <?php else : ?>
            <h4>Añadir nuevo anime</h4>
            <form action="series.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre del anime</label>
                    <input type="hidden" class="form-control" name="nombre_v" id="nombre" value="<?php echo $_POST["update"][0] ?>" autocomplete="off">
                    <input type="text" class="form-control" name="nombre_n" id="nombre" value="<?php echo $_POST["update"][0] ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="clave">Clave del anime</label>
                    <input type="text" class="form-control" name="clave_n" id="clave" value="<?php echo $_POST["update"][1] ?>" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-success">Añadir</button>
            </form>
        <?php endif; ?>
    </div>

</body>

</html>