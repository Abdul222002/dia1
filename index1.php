<?php
    if (!empty($_POST["usuario"] ) && !empty($_POST["contrasena"])) {
        if ($_POST["usuario"] == "admin" && $_POST["contrasena"] == "admin") {
            echo "<h1>Bienvenido admin</h1>";
        }else
        {
            echo "<h1>Usuario o contrasena incorrecta</h1>";
        }
    }else
    {
        echo "
            <h1>Por favor ingrese sus datos</h1>
        ";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="index1.php" method="POST">
        <input type="text" name="usuario" placeholder="usuario">
        <input type="password" name="contrasena" placeholder="contrasena">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>