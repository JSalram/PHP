<!doctype html>
<html lang="en">

<head>
    <title><?php echo $_GET["anime"] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php
$nombre = $_GET["nombre"];
$clave = $_GET["clave"];
?>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.php">DAnime</a>
    </nav>

    <div class="container my-4 text-center">
        <h1><?php echo $nombre ?></h1>
        <h4>Clave: <?php echo $clave ?></h4>
    </div>
</body>

</html>