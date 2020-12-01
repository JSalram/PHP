<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="shortcut icon" href="./img/mugiwara.png" type="image/x-icon" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>JAnime</title>
</head>

<body class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-default my-3">
            <div class="container-fluid">
                <div class="navbar-header">
                    <h1 class="text-light">JAnime</h1>
                </div>
                <?php if (!isset($_POST["user"]) && !isset($_POST["passwd"])) : ?>
                    <div class="dropdown">
                        <a class="btn btn-dark border-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Regístrate
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-secondary" aria-labelledby="dropdownMenuLink">
                            <form class="m-3 text-white" method="post" action="index.php" autocomplete="off">
                                <div class="form-group">
                                    <label for="user">Usuario:</label>
                                    <input id="user" class="form-control" type="text" name="user" autofocus />
                                </div>
                                <div class="form-group">
                                    <label for="passwd">Contraseña: </label>
                                    <input id="passwd" class="form-control" type="password" name="passwd" />
                                </div>
                                <button class="btn btn-dark w-100" type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                <?php else : ?>
                    <?php
                    $user = $_POST["user"];
                    $passwd = $_POST["passwd"];

                    $conn = new mysqli("localhost", "root", "", "test");
                    // $conn = new mysqli("sql207.epizy.com", "epiz_27293444", "GTAZ4ep1Zy", "epiz_27293444_janime");

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT username, passwd FROM user WHERE username='$user' AND passwd='$passwd'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="user card p-2">' . ucfirst($user) . '</div>';
                        $sql = "SELECT name, watched FROM anime WHERE username='$user'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="watched" style="display: none">w' . $row["name"] . ':' . $row["watched"] . '</div>';
                            }
                        }
                    } else {
                        header('Location: ' . $_SERVER['REQUEST_URI']);
                    }
                    $conn->close();
                    ?>
                <?php endif; ?>
            </div>
        </nav>
        <hr class="bg-light" />
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <img style="height: 60px" class="mx-3" src="img/mugiwara.png" />
                            One Piece
                        </h4>
                        <hr />
                        <img class="img-fluid img-thumbnail mb-3" src="img/mugiwara-card.jpg" alt="" />
                        <a class="btn btn-lg btn-primary d-block" href="OnePiece/index.html">Ver ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <img style="height: 60px" class="mx-3" src="img/haikyuu.png" />
                            Haikyuu
                        </h4>
                        <hr />
                        <img class="img-fluid img-thumbnail mb-3" src="img/haikyuu-card.png" alt="" />
                        <a class="btn btn-lg btn-primary d-block" href="Haikyuu/index.html">Ver ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>