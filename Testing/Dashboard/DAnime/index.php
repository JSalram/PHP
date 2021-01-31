<!doctype html>
<html lang="es">

<head>
    <title>Danime</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.php">DAnime</a>
        <a class="btn btn-secondary ml-auto" href="./series.php">Administrar series</a>
    </nav>

    <div class="container my-4">
        <h1>Elige una opción</h1>
        <div class="row justify-content-center">
            <?php
            $conn = new mysqli("localhost", "root", "", "test");
            $sql = "SELECT nombre, clave FROM danime";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                <div class="card col-md-5 m-2">
                    <div class="card-body">
                        <h2 class="card-title">' . $row["nombre"] . '</h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus quasi voluptatem accusantium? Nesciunt,
                            voluptatum dolore cumque quaerat corrupti accusamus incidunt?
                            Aliquid reiciendis cum ratione eum, eos ad enim voluptates soluta distinctio qui ipsam quo reprehenderit quod
                            placeat sequi nulla fugit!
                        </p>
                        <form action="anime.php">
                            <input type="hidden" name="nombre" value="' . $row["nombre"] . '" />
                            <input type="hidden" name="clave" value="' . $row["clave"] . '" />
                            <input type="submit" value="Ver ahora" class="btn btn-primary w-100" />
                        </form>
                    </div>
                </div>
                ';
                }
            }
            ?>
        </div>
    </div>
</body>

</html>