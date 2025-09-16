<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia 1</title>
</head>
<body>

    <div>
        <a href="?algo=contacto">contacto</a>
    <div>
        <a href="?algo=informacion">informacion</a>
    </div>
    <div>
        <a href="?algo=foto">foto</a>
    </div>

    <form action="" method="GET">

    <?php
            if (isset($_GET["algo"])) {
            if ($_GET["algo"] == "contacto") {
                echo "<h1>hola mi numero de contacto es 45454654654</h1>";
            } elseif ($_GET["algo"] == "informacion") {
                echo "<h1>tengo 19 años y soy de mexico</h1>";
            } elseif ($_GET["algo"] == "foto") {
                echo "<img src='images/image.jpg'>";
            } else {
                echo "<h1>Página no encontrada</h1>";
            }
        }
    ?>
</body>
</html>
